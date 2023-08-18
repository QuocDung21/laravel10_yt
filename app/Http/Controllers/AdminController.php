<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


use Illuminate\Support\Facades\Session;

use App\Http\Requests;
use App\Models\Login;
use App\Models\Social;
use Illuminate\Support\Facades\Redirect;
Use PDF;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Laravel\Socialite\Facades\Socialite;

session_start();

class AdminController extends Controller
{
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }
    
    public function login(){
        return view('admin_login');
    }
    public function show_dashboard(){
        $this->AuthLogin();
        $completedInvoices = DB::table('tbl_bill')->where('bill_status', 3)->get();
        $totalAmount = 0;
        foreach($completedInvoices as $invoice){
            $totalAmount += $invoice->bill_total;
        }

        $today = Carbon::today();
        $completedInvoicesToday = DB::table('tbl_bill')->where('bill_status', 3)->whereDate('created_at', $today)->get();
        $totalToday = 0;
        foreach($completedInvoicesToday as $invoicetoday){
            $totalToday += $invoicetoday->bill_total;
        }
        return view('admin.dashboard')->with('totalAmount', $totalAmount)
                                      ->with('totalToday', $totalToday);
    }
    public function dashboard(Request $request){
        $data = $request->all();
        $admin_email = $data['admin_email'];
        $admin_password = $data['admin_password'];
        $login = Login::where('admin_email', $admin_email)->where('admin_password', $admin_password)->first();
        $login_count = $login->count();
        if($login_count){
            Session::put('admin_name', $login->admin_name);
            Session::put('admin_id', $login->admin_id);
            return Redirect::to('/dashboard');
        }else{
            Session::put('message', 'Login information is incorrect');
            return Redirect::to('/admin');
        }
        // $admin_email = $request->admin_email;
        // $admin_password = $request->admin_password;

        // $result = DB::table('tbl_admin')->where('admin_email', $admin_email)->where('admin_password', $admin_password)->first();
        // if($result){
        //     Session::put('admin_name', $result->admin_name);
        //     Session::put('admin_id', $result->admin_id);
        //     return Redirect::to('/dashboard');

        // } else{
        //     Session::put('message', 'Login information is incorrect');
        //     return Redirect::to('/admin');
        // }

    }
    public function logout(){
        $this->AuthLogin();
        Session::put('admin_id', null);
        Session::put('admin_name', null);
        return Redirect::to('/admin');
    }
    public function shipping_unit(){
        $this->AuthLogin();
        $shippingunit0 = DB::table('tbl_shipping_unit')->where('shipping_method', 0)->get();
        $shippingunit1 = DB::table('tbl_shipping_unit')->where('shipping_method', 1)->get();
        return view('admin.shipping_unit')->with('shippingunit0', $shippingunit0)
                                          ->with('shippingunit1', $shippingunit1);
    }
    public function add_shipping_unit(Request $request){
        
        $data = array();
        $data['shipping_name'] = $request->shipping_name;
        $data['shipping_method'] = $request->shipping_method;
        $data['shipping_status'] = $request->shipping_status;
        $data['shipping_price'] = $request->shipping_price;

        // Kiểm tra xem đã có dòng nào có "is_default" = 1 hay chưa
        $existingDefaultRow = DB::table('tbl_shipping_unit')->where('is_default', 1)->first();

        // Nếu đã tồn tại dòng với "is_default" = 1, cập nhật lại thành "is_default" = 0
        if ($existingDefaultRow) {
            DB::table('tbl_shipping_unit')->where('shipping_id', $existingDefaultRow->shipping_id)->update(['is_default' => 0]);
        }

        // Thêm dữ liệu mới vào bảng với "is_default" = 1
        $data['is_default'] = 1;
        DB::table('tbl_shipping_unit')->insert($data);

        return back();

    }
    public function delete_shipping_unit($shipping_id){
        DB::table('tbl_shipping_unit')->where('shipping_id', $shipping_id)->delete();
        
        return back();
    }
    public function discount(){
        $this->AuthLogin();
        $show_code = DB::table('tbl_discount')->where('discount_method', 0)->get();
        $show_voucher = DB::table('tbl_discount')->where('discount_method', 1)->get();
        return view('admin.discount')->with('show_code', $show_code)
                                     ->with('show_voucher', $show_voucher);
    }
    public function add_discount(Request $request){
        $data = array();
        $data['discount_voucher'] = $request->discount_voucher;
        $data['discount_code'] = $request->discount_code;
        $data['discount_price'] = $request->discount_price;
        $data['discount_percent'] = $request->discount_percent;
        $data['discount_method'] = $request->selectOption;
        $data['discount_status'] = $request->discount_status;
        $data['discount'] = $request->discount;

        DB::table('tbl_discount')->insert($data);
        return back();
    }
    public function check_code(Request $request){
        
        // Lấy giá trị của mã giảm giá từ yêu cầu POST
        $discountCode = $request->input('discount_code');

        // Kiểm tra xem mã code có tồn tại trong bảng discount_codes hay không
        $result = DB::table('tbl_discount')->where('discount_method', 0)->where('discount_code', $discountCode)->where('discount_status', 0)->first();

        // Nếu kết quả trả về là null, tức là mã code không tồn tại trong CSDL
        if (!$result) {
            // Mã code không hợp lệ
            return response()->json(['success' => false]);
        }
        

            // Lấy giá trị discount_method
        $discountMethod = $result->discount;

        // Lấy giá trị discount_price nếu discount là 1
        $discountPrice = ($discountMethod == 1) ? $result->discount_price : null;

        // Lấy giá trị discount_percent nếu discount là 0
        $discountPercent = ($discountMethod == 0) ? $result->discount_percent : null;

        
        return response()->json(['success' => true, 'discount_price' => $discountPrice, 'discount_percent' => $discountPercent]);


    }
    public function order_list(){
        $this->AuthLogin();
        $order0 = DB::table('tbl_bill')->where('bill_status', 0)->orderBy('created_at', 'desc')->get();
        $order1 = DB::table('tbl_bill')->where('bill_status', 1)->orderBy('created_at', 'desc')->get();
        $order2 = DB::table('tbl_bill')->where('bill_status', 2)->orderBy('created_at', 'desc')->get();
        $order3 = DB::table('tbl_bill')->where('bill_status', 3)->orderBy('created_at', 'desc')->get();
        $order4 = DB::table('tbl_bill')->where('bill_status', 4)->orderBy('created_at', 'desc')->get();
        
        return view('admin.order_list')->with('order0', $order0)
                                       ->with('order1', $order1)
                                       ->with('order2', $order2)
                                       ->with('order3', $order3)
                                       ->with('order4', $order4);
    }

    public function cancel_bill($bill_id){
        $this->AuthLogin();
        DB::table('tbl_bill')->where('bill_id', $bill_id)->update(['bill_status' => 4]);
        return back();

    }
    public function update_bill_status($orderId){
        $this->AuthLogin();
        DB::table('tbl_bill')->where('bill_id', $orderId)->update(['bill_status' => 1]);
        return $this->view_bill($orderId);
    }
    public function update3($orderId){
        $this->AuthLogin();
        DB::table('tbl_bill')->where('bill_id', $orderId)->update(['bill_status' => 3]);
        return $this->view_bill($orderId);
    }
    public function update2($orderId){
        $this->AuthLogin();
        DB::table('tbl_bill')->where('bill_id', $orderId)->update(['bill_status' => 2]);
        return $this->view_bill($orderId);
    }
    public function view_bill($orderId){
        $this->AuthLogin();
        $bill = DB::table('tbl_bill')->where('bill_id', $orderId)->first();
        $address = DB::table('tbl_user_address')->where('id_address', $bill->id_address)->first();
        if($bill){
            $orderItems = DB::table('tbl_bill_detail')->where('bill_id', $orderId)->get();
            foreach($orderItems as $item){
                $product = DB::table('tbl_product')->where('product_id', $item->product_id)->first();
                $category = DB::table('tbl_category_product')->where('category_id', $product->category_id)->first();
                $categorydetail = DB::table('tbl_category_product_detail')->where('category_detail_id', $product->category_detail_id)->first();
                $item->product = $product;
                $item->category = $category;
                $item->categorydetail = $categorydetail;
            }
        }
        return view('admin.order_details', ['bill' => $bill, 'address' => $address, 'orderItems' => $orderItems]);
    }
    public function order_details($orderId){
        $this->AuthLogin();
        $order = DB::table('tbl_bill')->where('bill_id', $orderId)->first();
        return view('admin.order_details', ['order' => $order]);
    }
    public function print_bill($orderId, Application $app){
        $pdf = $app->make('dompdf.wrapper');
        $pdf->loadHTML($this->print_bill_convert($orderId));
        return $pdf->stream();
    }
    public function print_bill_convert($orderId){
        $this->AuthLogin();
        $currentDateTime = date('d-m-Y H:i:s');
        $bill = DB::table('tbl_bill')->where('bill_id', $orderId)->first();
        $address = DB::table('tbl_user_address')->where('id_address', $bill->id_address)->first();
        if($bill){
            $orderItems = DB::table('tbl_bill_detail')->where('bill_id', $orderId)->get();
            foreach($orderItems as $item){
                $product = DB::table('tbl_product')->where('product_id', $item->product_id)->first();
                $category = DB::table('tbl_category_product')->where('category_id', $product->category_id)->first();
                $categorydetail = DB::table('tbl_category_product_detail')->where('category_detail_id', $product->category_detail_id)->first();
                $item->product = $product;
                $item->category = $category;
                $item->categorydetail = $categorydetail;
            }
        }
        $output = '';
        $output .= '<style>body{
            font-family: DejaVu Sans;
        }
            
        </style>';
        // Gắn nội dung của phần logo và tên cửa hàng vào biến $output
        
        
        $output .= '<div style="margin-left: 30px;">';
        $output .= '<h3 style="font-size: 25px; text-align: center;">Nhà thuốc Lan Phương</h3>';
        $output .= '<div style="font-size: 15px; text-align: center;">';
        $output .= '<p style="font-size: 11px">Địa chỉ: 102A Nguyễn Tất Thành, phường Tân Lập, TP.Buôn Ma Thuột, tỉnh Đăk Lăk</p>';
        $output .= '<p style="font-size: 11px">Số điện thoại: 0877717575</p>';
        $output .= '<p style="font-size: 11px">Website: www.nhathuoclanphuong.com  <br>  Email: nhathuoc.lanphuong@email.com</p>';
        $output .= '</div>';
        $output .= '</div>';
        

        // Gắn nội dung của phần Phiếu mua hàng vào biến $output
        $output .= '<div>';
        $output .= '<h3 style="font-size: 23px; text-align: center;">Phiếu mua hàng</h3>';
        $output .= '<p style="text-align: center; font-size: 13px">'.$currentDateTime.'</p>';
        $output .= '<p style="font-size: 13px">Mã đơn hàng: <strong>'.$bill->bill_id.'</strong></p>';
        $output .= '<p style="font-size: 13px">Ngày tạo đơn hàng: '.$bill->bill_date.'</p>';
        if($bill->bill_payments == 'cash'){
            $output .= '<p style="font-size: 13px">Phương thức thanh toán: Tiền mặt</p>';
        }
        elseif($bill->bill_payments == 'momo'){
            $output .= '<p style="font-size: 13px">Phương thức thanh toán: MoMo</p>';
        }
        elseif($bill->bill_payments == 'vnpay'){
            $output .= '<p style="font-size: 13px">Phương thức thanh toán: VNPAY</p>';
        }else{
            $output .= '<p style="font-size: 13px">Phương thức thanh toán: Viettel Money</p>';
        }
        
        
        $output .= '</div>';

        // Gắn nội dung của phần Thông tin giao hàng vào biến $output
        $output .= '<table style="width: 100%; border-collapse: collapse;">';
        $output .= '<thead>';
        $output .= '<tr style="background-color: #f2f2f2;">';
        $output .= '<th style="border: 1px solid #ccc; padding: 10px; font-size: 13px">Thông tin giao hàng</th>';
        $output .= '</tr>';
        $output .= '</thead>';
        $output .= '<tbody>';
        $output .= '<tr>';
        $output .= '<td style="border: 1px solid #ccc; padding: 10px; font-size: 13px">'.$address->user_name.' - '.$address->user_phone.'<br>'.$address->user_address.', '.$address->user_ward_text.', '.$address->user_district_text.', '.$address->user_city_text.'</td>';
        $output .= '</tr>';
        $output .= '</tbody>';
        $output .= '</table>';
        $output .= '<br>';

        // Gắn nội dung của phần chi tiết đơn hàng vào biến $output
        $output .= '<table style="width: 100%; border-collapse: collapse;">';
        $output .= '<thead>';
        $output .= '<tr style="background-color: #f2f2f2;">';
        $output .= '<th style="border: 1px solid #ccc; padding: 10px; font-size: 11px">STT</th>';
        $output .= '<th style="border: 1px solid #ccc; padding: 10px; font-size: 11px">Tên sản phẩm</th>';
        $output .= '<th style="border: 1px solid #ccc; padding: 10px; font-size: 11px">Loại sản phẩm</th>';

        $output .= '<th style="border: 1px solid #ccc; padding: 10px; font-size: 11px">Số lượng</th>';
        $output .= '<th style="border: 1px solid #ccc; padding: 10px; font-size: 11px">Đơn giá</th>';
        $output .= '<th style="border: 1px solid #ccc; padding: 10px; font-size: 11px">Thành tiền</th>';
        $output .= '</tr>';
        $output .= '</thead>';
        $output .= '<tbody>';
        foreach($orderItems as $item){
            $subtotal = $item->product_quantity * $item->product_price;
            $output .= '<tr>';
            $output .= '<td style="border: 1px solid #ccc; padding: 10px; text-align: center; font-size: 11px"></td>';
            $output .= '<td style="border: 1px solid #ccc; padding: 10px; font-size: 11px">'.$item->product->product_name.'</td>';
            $output .= '<td style="border: 1px solid #ccc; padding: 10px; font-size: 11px">'.$item->categorydetail->category_detail_name.'</td>';
          
            $output .= '<td style="border: 1px solid #ccc; padding: 10px; text-align: center; font-size: 11px">'.$item->product_quantity.'</td>';
            $output .= '<td style="border: 1px solid #ccc; padding: 10px; text-align: right; font-size: 11px">'.number_format($item->product_price).'</td>';
            $output .= '<td style="border: 1px solid #ccc; padding: 10px; text-align: right; font-size: 11px">'.number_format($subtotal).'</td>';
            $output .= '</tr>';
        }
        
        
        

        
        $output .= '<tr>';
        $output .= '<td style="border: 1px solid #ccc; padding: 10px; text-align: right; font-size: 11px" colspan="5">Tổng tiền</td>';
        $output .= '<td style="border: 1px solid #ccc; padding: 10px; text-align: right; font-size: 11px" colspan="1">'.number_format($bill->bill_total).' đ</td>';
        $output .= '</tr>';
        $output .= '<tr>';
        $output .= '<td style="border: 1px solid #ccc; padding: 10px; text-align: right; font-size: 11px" colspan="5">Phiếu giảm giá</td>';
        $output .= '<td style="border: 1px solid #ccc; padding: 10px; text-align: right; font-size: 11px" colspan="1">- '.number_format($bill->bill_discount).' đ</td>';
        $output .= '</tr>';
        $output .= '<tr>';
        $output .= '<td style="border: 1px solid #ccc; padding: 10px; text-align: right; font-size: 11px" colspan="5">Phí vận chuyển</td>';
        $output .= '<td style="border: 1px solid #ccc; padding: 10px; text-align: right; font-size: 11px" colspan="1">'.number_format($bill->bill_shipping).' đ</td>';
        $output .= '</tr>';
        $output .= '<tr>';
        $output .= '<td style="border: 1px solid #ccc; padding: 10px; text-align: right; font-size: 11px" colspan="5">Tổng thanh toán</td>';
        $output .= '<td style="border: 1px solid #ccc; padding: 10px; text-align: right; font-size: 11px" colspan="1"><strong>'.number_format($bill->bill_totalAll).' đ</strong></td>';
        $output .= '</tr>';
        $output .= '</tbody>';
        $output .= '</table>';

        $output .= '<p style="text-align: left; margin-top: 20px; font-size: 12px"><strong>Khách hàng vui lòng kiểm tra tình trạng sản phẩm trước khi sử dụng.</strong></p>';

        return $output;
    }

    public function advertising(){
        $banner = DB::table('tbl_banner')->orderBy('banner_id', 'desc')->get();
        return view('admin.advertising')->with('banner', $banner);
    }
    public function add_banner(Request $request){
        $data = array();
        $get_image = $request -> file('banner_image');
        $data['banner_status'] = $request->banner_status;
        // $data['cropped_image_data'] = $request -> cropped_image_data;
        
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = pathinfo($get_name_image, PATHINFO_FILENAME);
            $currentDateTime = date('Y-m-d H:i:s');
            $new_name_image = $name_image.'_'.$currentDateTime.'.'.$get_image->getClientOriginalExtension();
            $get_image->move('uploads/banner', $new_name_image);
            $data['banner_path'] = $new_name_image;
            
            
        }
        DB::table('tbl_banner')->insert($data);

        return redirect()->back()->with('success', 'Thêm banner thành công');
        
    }
    // public function saveCroppedImage(Request $request)
    // {
    //     $croppedImageData = $request->input('cropped_image_data');
    //     $imageName = time() . '.png'; 
    //     $imageData = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $croppedImageData));
    //     Storage::disk('public')->put('/uploads/banner/' . $imageName, $imageData);

    //     // Lưu thông tin về hình ảnh vào cơ sở dữ liệu
    //     DB::table('tbl_banner')->insert([
    //         'image_path' => 'uploads/banner/' . $imageName,
    //         'created_at' => now(),
    //     ]);

    //     return response()->json(['success' => true, 'message' => 'Cropped image saved successfully']);
    // }
    public function deletebanner($bannerId){
        
        DB::table('tbl_banner')->where('banner_id', $bannerId)->delete();
        return back();

    }
    public function hidebanner($bannerId){
        DB::table('tbl_banner')->where('banner_id', $bannerId)->update(['banner_status' => 1]);
        return back();
    }
    public function showbanner($bannerId){
        DB::table('tbl_banner')->where('banner_id', $bannerId)->update(['banner_status' => 0]);
        return back();
    }
    public function login_facebook(){
        return Socialite::driver('facebook')->redirect();
    }
    public function callback_facebook(){
        $provider = Socialite::driver('facebook')->user();
        $account = Social::where('provider', 'facebook')->where('provider_user_id', $provider->getId())->first();
        if($account){
            $account_name = Login::where('admin_id', $account->user)->first();
            Session::put('admin_name', $account_name->admin_name);
            Session::put('admin_id', $account_name->admin_id);

            return redirect('/dashboard');
        }else{
            $thanh = new Social([
                'provider_user_id' => $provider->getId(),
                'provider' => 'facebook'
            ]);
            $orang = Login::where('admin_email', $provider->getEmail())->first();
            if($orang){
                $orang = Login::create([
                    'admin_name' => $provider->getName(),
                    'admin_email' => $provider->getEmail(),
                    'admin_password' => '',
                    'admin_phone' => ''
                    
                ]);
            }
            $thanh->login()->associate($orang);
            $thanh->save();

            $account_name = Login::where('admin_id',$thanh->user)->first();
            Session::put('admin_name', $account_name->admin_name);
            Session::put('admin_id', $account_name->admin_id);
            return redirect('/dashboard');

        }
    }

    public function login_google(){
        return Socialite::driver('google')->redirect(false);
    }
    
     
    public function callback_google(){
        $users = Socialite::driver('google')->user();
        
        $authUser = $this->findOrCreateUser($users,'google');
        $account_name = Login::where('admin_id',$authUser->user)->first();
        Session::put('admin_name',$account_name->admin_name);
        Session::put('admin_id',$account_name->admin_id);
        return redirect('/dashboard');

    }
    public function findOrCreateUser($users, $provider){
        $authUser = Social::where('provider_user_id', $users->id)->first();
        if($authUser){
            return $authUser;
        }
        $thanh = new Social([
            'provider_user_id' => $users->id,
            'provider' => strtoupper($provider),
        ]);
        $orang = Login::where('admin_email', $users->email)->first();
        if($orang){
            $orang = Login::create([
                'admin_name' => $users->name, 
                'admin_email' => $users->email,
                'admin_password' => '',
                'admin_phone' => '',

            ]);
        }
        $thanh->login()->associate($orang);
        $thanh->save();
        $account_name = Login::where('admin_id', $authUser->user)->first();
        Session::put('admin_name', $account_name->admin_name);
        Session::put('admin_id', $account_name->admin_id);
        return redirect('/dashboard');
    }
    public function show_user_list(){
        $this->AuthLogin();
        $user = DB::table('tbl_user')->orderBy('user_id','desc')->get();
        return view('admin.user_list')->with('user', $user);
    }
    public function delete_user($userId){
        $this->AuthLogin();
        $user = DB::table('tbl_user')->where('user_id', $userId)->first();
        if($user){
            DB::table('tbl_user')->where('user_id', $userId)->delete();
        }else{
            return back();
        }
        return back();
    }
    public function getUserInfo($userId){
        $this->AuthLogin();
        $user = DB::table('tbl_user')->where('user_id', $userId)->first();
        return response()->json($user);
    }
    public function updateUser(Request $request){
        $userId = $request->input('userid');
        $userName = $request->input('name');
        $userPhone = $request->input('phone');
        $userEmail = $request->input('email');
        $userPassword = $request->input('password');

        DB::table('tbl_user')->where('user_id', $userId)->update([
            'user_name' => $userName,
            'user_phone' => $userPhone,
            'user_email' => $userEmail,
            'user_password' => $userPassword,
        ]);
        return back();
    }
    public function getUserOrders($userId){
        $this->AuthLogin();
        $userOrders = DB::table('tbl_bill')->where('user_id', $userId)->orderBy('bill_id', 'desc')->get();
        return response()->json($userOrders);
    }
    public function show_prescription(){
        $this->AuthLogin();
        $prescription = DB::table('tbl_prescription')->orderBy('prescription_id', 'desc')->get();
        return view('admin.prescriptions')->with('prescription', $prescription);
    }
    public function send_email(){
        $this->AuthLogin();
        $promotion = DB::table('tbl_email_promotional')->orderBy('created_at')->get();
        return view('admin.sendemail.sendemail')->with('promotion', $promotion);
    }
    public function delete_email_promotion($id){
        $this->AuthLogin();
        DB::table('tbl_email_promotional')->where('id', $id)->delete();
        return back();
    }
    
    // public function send_e()
    // {
    //     $emailData = DB::table('tbl_email_promotional')->select('email')->get();
    //     $now = Carbon::now('Asia/Ho_Chi_Minh')->format('d-m-Y');
    //     $title_mail = "Thông tin khuyến mãi " . $now;

        
    //     $emails = $emailData->pluck('email')->toArray();
    //     // dd($emails);
    //     Mail::send('admin.sendemail.mail_content', [], function ($message) use ($title_mail, $emails) {
    //         $message->to($emails)
    //                 ->subject($title_mail)
    //                 ->from('lanphuongpharmacy03@gmail.com', 'Nhà Thuốc Lan Phương');

    //     });

    //     return redirect()->back()->with('message', 'Gửi thông tin khuyến mãi thành công');
    // }
    public function sendEmails($emailString){
        $this->AuthLogin();
        $selectedEmails = explode(',', $emailString);
        $now = Carbon::now('Asia/Ho_Chi_Minh')->format('d-m-Y');
        $title_mail = "Thông tin khuyến mãi " . $now;

       
        Mail::send('admin.sendemail.mail_content', [], function ($message) use ($title_mail, $selectedEmails) {
            $message->to($selectedEmails)
                    ->subject($title_mail)
                    ->from('lanphuongpharmacy03@gmail.com', 'Nhà Thuốc Lan Phương');

        });


        return redirect()->back()->with('message', 'Gửi thông tin khuyến mãi thành công');
    }


    public function mail_content(){
        $this->AuthLogin();
        return view('admin.sendemail.mail_content');
    }



    
   
}
