<?php

namespace App\Http\Controllers;

use App\Models\Social;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Mail;


session_start();


class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function footer()
    {
        return view('partial.footer');
    }

    public function upload()
    {
        return view('upload');
    }

    public function cart()
    {
        return view('cart');
    }

    public function checkout()
    {
        return view('checkout');
    }

    public function detail()
    {
        return view('detail');
    }

    public function category()
    {
        return view('category');
    }

    public function register(Request $request)
    {
        $userPhone = $request->register_phone;

        // Kiểm tra xem số điện thoại đã tồn tại trong cơ sở dữ liệu hay chưa
        $userExists = DB::table('tbl_user')->where('user_phone', $userPhone)->exists();

        if ($userExists) {

            return back()->withErrors(['register_phone' => 'Số điện thoại đã tồn tại trong hệ thống.'])->withInput();

        } else {

            $data = array();
            $data['user_phone'] = $userPhone;
            $data['user_password'] = $request->register_password;


            DB::table('tbl_user')->insert($data);
            session()->flash('success_message', 'Đăng ký thành công!');


            return back();
        }
    }


    public function login(Request $request)
    {
        $user_phone = $request->user_phone;
        $user_password = $request->user_password;
        $result = DB::table('tbl_user')->where('user_phone', $user_phone)->where('user_password', $user_password)->first();

        if ($result) {
            Session::put('user_name', $result->user_name);
            Session::put('user_phone', $result->user_phone);
            Session::put('user_id', $result->user_id);


            return Redirect::to('/account');
        } else {
            return back()->withErrors(['login_error' => 'Thông tin đăng nhập không chính xác'])->withInput();
        }

    }

    public function userlogout()
    {
        Session::put('user_name', null);
        Session::put('user_phone', null);
        Session::put('user_id', null);
        Session::put('user_email', null);
        Session::put('user_avatar', null);
        Session::put('user_sex', null);
        Session::put('user_bithday', null);

        return Redirect::to('/');

    }

    public function saveaccount(Request $request)
    {

        $id = $request->input('user_id');
        $name = $request->input('user_name');
        $sex = $request->input('user_sex');
        $bithday = $request->input('user_bithday');

        $email = $request->input('user_email');

        DB::table('tbl_user')
            ->where('user_id', $id)
            ->update([
                'user_name' => $name,
                'user_sex' => $sex,
                'user_bithday' => $bithday,

                'user_email' => $email,
            ]);
        Session::put('user_name', $name);


        return redirect()->back();


    }


    // public function address(Request $request){
    //     $data = array();
    //     $data['user_id'] = $request-> user_id;
    //     $data['user_name'] = $request -> user_name;
    //     $data['user_phone'] = $request -> user_phone;
    //     $data['user_email'] = $request -> user_email;
    //     $data['user_city'] = $request -> user_city;
    //     $data['user_district'] = $request -> user_district;
    //     $data['user_ward'] = $request -> user_ward;
    //     $data['user_address'] = $request -> user_address;
    //     $data['user_note'] = $request -> user_note;
    //     $data['is_default'] = $request->is_default ? $request->is_default : 0;

    //     DB::table('tbl_user_address')->insert($data);
    //     return Redirect('/checkout');
    // }

    public function address(Request $request)
    {
        $user_id = $request->user_id;
        $is_default = $request->is_default ? 1 : 0;

        // Kiểm tra xem user_id đã tồn tại trong cơ sở dữ liệu hay chưa
        $user_address_exists = DB::table('tbl_user_address')->where('user_id', $user_id)->exists();

        if ($user_address_exists) {
            // Kiểm tra xem checkbox is_default có được chọn hay không
            if ($is_default) {
                // Cập nhật tất cả các địa chỉ khác của user_id về is_default = 0
                DB::table('tbl_user_address')->where('user_id', $user_id)->update(['is_default' => 0]);
            }
        } else {
            // Nếu user_id chưa tồn tại, is_default được đặt là 1 cho địa chỉ mới
            $is_default = 1;
        }

        $data = [
            'user_id' => $user_id,
            'user_name' => $request->user_name,
            'user_phone' => $request->user_phone,
            'user_email' => $request->user_email,
            'user_city' => $request->user_city,
            'user_district' => $request->user_district,
            'user_ward' => $request->user_ward,
            'user_address' => $request->user_address,
            'user_note' => $request->user_note,
            'is_default' => $is_default,
            'user_city_text' => $request->user_city_text,
            'user_district_text' => $request->user_district_text,
            'user_ward_text' => $request->user_ward_text,

        ];


        DB::table('tbl_user_address')->insert($data);
        return redirect('/checkout');
    }

    public function update_address_md(Request $request)
    {
        $user_id = $request->input('user_id');
        $address_id = $request->input('address_id');

        // Kiểm tra xem địa chỉ có thuộc về người dùng hiện tại không
        $address = DB::table('tbl_user_address')
            ->where('id_address', $address_id)
            ->where('user_id', $user_id)
            ->first();

        if ($address) {
            // Đánh dấu địa chỉ được chọn là mặc định
            DB::table('tbl_user_address')
                ->where('user_id', $user_id)
                ->update(['is_default' => 0]); // Đặt tất cả các địa chỉ khác thành không phải mặc định

            DB::table('tbl_user_address')
                ->where('user_id', $user_id)
                ->where('id_address', $address_id)
                ->update(['is_default' => 1]); // Cập nhật địa chỉ được chọn là mặc định
        }
        return back();
    }

    public function pay(Request $request)
    {


        $userId = $request->user_id;
        $paymentMethod = $request->payment_method;
        $billNote = $request->bill_note;
        $billDate = $request->bill_date;
        $productIds = $request->product_id;
        $productQuantities = $request->product_quantity;
        $productPrices = $request->product_price;
        $productPricesOld = $request->product_price_old;
        $idAddress = $request->id_address;
        $billtotalAll = $request->bill_totalAll;
        $billtotal = $request->bill_total;
        $billdiscount = $request->bill_discount;
        $billshipping = $request->bill_shipping;


        // Thực hiện insert vào bảng bill
        $billData = [
            'user_id' => $userId,
            'bill_payments' => $paymentMethod,
            'bill_note' => $billNote,
            'bill_date' => $billDate,
            'id_address' => $idAddress,
            'bill_totalAll' => $billtotalAll,
            'bill_total' => $billtotal,
            'bill_discount' => $billdiscount,
            'bill_shipping' => $billshipping,

        ];
        // DB::table('tbl_bill')->insert($billData);

        $billId = DB::table('tbl_bill')->insertGetId($billData);

        $billDetailsData = [];
        foreach ($productIds as $key => $productId) {
            $quantity = $productQuantities[$key];
            $price = $productPrices[$key];
            $priceOld = $productPricesOld[$key];

            $billDetailData = [
                'bill_id' => $billId,
                'product_id' => $productId,
                'product_quantity' => $quantity,
                'product_price' => $price,
                'product_price_old' => $priceOld,
            ];
            $billDetailsData[] = $billDetailData;
        }
        DB::table('tbl_bill_detail')->insert($billDetailsData);

        return back();
        // $billId = DB::table('tbl_bill')->insert([

        // ]);

        // // Lưu chi tiết hóa đơn vào cơ sở dữ liệu
        // foreach ($bill_details as $bill_detail) {
        //     $product_id = $bill_detail['product_id'];
        //     $quantity = $bill_detail['quantity'];
        //     $price = $bill_detail['price'];
        //     $price_old = $bill_detail['price_old'];

        //     DB::table('tbl_bill_detail')->insert([
        //         'bill_id' => $billId,
        //         'product_id' => $product_id,
        //         'product_quantity' => $quantity,
        //         'product_price' => $price,
        //         'product_price_old' => $price_old
        //     ]);
        // }
        return back();
    }

    public function show_category_address()
    {
        $categories = DB::table('tbl_category_product')->where('category_status', 1)->get();
        $categorie = DB::table('tbl_category_product_detail')->where('category_detail_status', 1)->get();

        $user_id = Session::get('user_id');
        $addresses = DB::table('tbl_user_address')->where('user_id', $user_id)->orderBy('is_default', 'desc')->get();


        return view('client.address')->with('categories', $categories)->with('categorie', $categorie)->with('addresses', $addresses);


    }

    public function show_category_orders()
    {
        $categories = DB::table('tbl_category_product')->where('category_status', 1)->get();
        $categorie = DB::table('tbl_category_product_detail')->where('category_detail_status', 1)->get();

        $user_id = Session::get('user_id');
        $addresses = DB::table('tbl_user_address')->where('user_id', $user_id)->orderBy('is_default', 'desc')->get();
        $order_0 = DB::table('tbl_bill')->where('user_id', $user_id)->where('bill_status', 0)->orderBy('created_at', 'desc')->get();
        $order_1 = DB::table('tbl_bill')->where('user_id', $user_id)->where('bill_status', 1)->orderBy('created_at', 'desc')->get();
        $order_2 = DB::table('tbl_bill')->where('user_id', $user_id)->where('bill_status', 2)->orderBy('created_at', 'desc')->get();
        $order_3 = DB::table('tbl_bill')->where('user_id', $user_id)->where('bill_status', 3)->orderBy('created_at', 'desc')->get();
        $order_4 = DB::table('tbl_bill')->where('user_id', $user_id)->where('bill_status', 4)->orderBy('created_at', 'desc')->get();


        return view('client.orders')->with('categories', $categories)
            ->with('categorie', $categorie)
            ->with('order_0', $order_0)
            ->with('order_1', $order_1)
            ->with('order_2', $order_2)
            ->with('order_3', $order_3)
            ->with('order_4', $order_4)
            ->with('addresses', $addresses);
    }

    public function update_shipping_method(Request $request)
    {
        $shipping_id = $request->selected_shipping_item_id;
        $hasOtherDefault = DB::table('tbl_shipping_unit')
            ->where('shipping_id', '!=', $shipping_id)
            ->where('is_default', 1)
            ->exists();

        if ($hasOtherDefault) {
            // Nếu có bản ghi khác có is_default = 1, hạ xuống 0
            DB::table('tbl_shipping_unit')
                ->where('shipping_id', '!=', $shipping_id)
                ->update(['is_default' => 0]);
        }

        // Tiếp tục nâng mục được chọn lên 1
        DB::table('tbl_shipping_unit')
            ->where('shipping_id', $shipping_id)
            ->update(['is_default' => 1]);
        return back();
    }

    public function upload_image(Request $request)
    {
        $image = $request->file('image');
        if ($image) {
            // Generate a unique filename for the uploaded image
            $currentDateTime = date('Y-m-d_H-i-s');
            $new_image = 'user_avatar_' . $currentDateTime . '.' . $image->getClientOriginalExtension();

            // Move the uploaded image to the 'uploads/user' directory
            $image->move('uploads/user', $new_image);

            // Get the user ID from the session (assuming you have a 'user_id' column)
            $userId = Session::get('user_id');

            // Update the 'user_avatar' column in the 'tbl_user' table
            DB::table('tbl_user')
                ->where('user_id', $userId)
                ->update(['user_avatar' => $new_image]);

            return back();
        }
    }

    public function show_category_orderdetail($orderId)
    {
        $categories = DB::table('tbl_category_product')->where('category_status', 1)->get();
        $categorie = DB::table('tbl_category_product_detail')->where('category_detail_status', 1)->get();
        $user = DB::table('tbl_user')->where('user_id', Session::get('user_id'))->first();

        $order = DB::table('tbl_bill')->where('bill_id', $orderId)->first();
        $address = DB::table('tbl_user_address')->where('id_address', $order->id_address)->first();
        if ($order) {
            $orderItems = DB::table('tbl_bill_detail')->where('bill_id', $orderId)->get();
            foreach ($orderItems as $item) {
                $product = DB::table('tbl_product')->where('product_id', $item->product_id)->first();
                $item->product = $product;

            }
        }
        // Pass the user_sex value to the view

        return view('client.orderdetail')->with('categories', $categories)
            ->with('categorie', $categorie)
            ->with('user', $user)
            ->with('order', $order)
            ->with('address', $address)
            ->with('orderItems', $orderItems);
    }

    public function show_category_home($category_id)
    {
        $categories = DB::table('tbl_category_product')->where('category_status', 1)->get();
        $categorie = DB::table('tbl_category_product_detail')->where('category_detail_status', 1)->get();
        $user = DB::table('tbl_user')->where('user_id', Session::get('user_id'))->first();


        $cate = DB::table('tbl_category_product')->where('category_id', $category_id)->first();
        $cate_product = [];
        if ($cate) {
            $productsPerPage = 20;
            $cate_product = DB::table('tbl_product')->where('category_id', $category_id)->get();
            $cate_detail = DB::table('tbl_category_product_detail')->where('category_id', $category_id)->get();
            $product = DB::table('tbl_product')->where('category_id', $category_id)->where('product_status', 1)->paginate($productsPerPage);
        }


        return view('category')->with('cate', $cate)
            ->with('product', $product)
            ->with('cate_detail', $cate_detail)
            ->with('cate_product', $cate_product)
            ->with('categories', $categories)
            ->with('categorie', $categorie)
            ->with('user', $user);
    }


    public function login_facebook_customer()
    {
        config(['services.facebook.redirect' => env('FACEBOOK_CLIENT_REDIRECT')]);

        // Chuyển hướng người dùng đến trang xác thực đăng nhập bằng Facebook
        return Socialite::driver('facebook')->redirect();

    }

    public function callback_facebook_customer()
    {
        config(['services.facebook.redirect' => env('FACEBOOK_CLIENT_REDIRECT')]);
        $provider = Socialite::driver('facebook')->user();
        dd($provider);
    }

    public function show_change_password()
    {
        // $user = DB::table('tbl_user')->where('user_id', $userId)->first();
        // if($user){

        $categories = DB::table('tbl_category_product')->where('category_status', 1)->get();
        $categorie = DB::table('tbl_category_product_detail')->where('category_detail_status', 1)->get();
        $user = DB::table('tbl_user')->where('user_id', Session::get('user_id'))->first();


        // }
        return view('client.changepassword')->with('categories', $categories)
            ->with('categorie', $categorie)
            ->with('user', $user);;
        // return view('client.changepassword')->with('categories', $categories)
        //                                         ->with('categorie', $categorie)
        //                                         ->with('currentUser', $currentUser)
        //                                         ->with('user' , $user);


    }

    public function new_change_password(Request $request, $userId)
    {
        $old_password = $request->user_password_account;
        $new_password = $request->user_password_account_2;
        $config_password = $request->user_password_account_3;
        // $user_id = $request->user_id_change;

        if ($new_password !== $config_password) {
            Session::flash('error3', 'Xác nhận mật khẩu không chính xác.');
            return back();
        }
        if (strlen($new_password) < 8) {
            Session::flash('error2', 'Mật khẩu mới phải có ít nhất 8 ký tự.');
            return back();
        }

        $user = DB::table('tbl_user')->where('user_id', $userId)->first();
        if ($old_password !== $user->user_password) {
            Session::flash('error', 'Mật khẩu hiện tại không chính xác.');
            return back();
        }

        DB::table('tbl_user')->where('user_id', $userId)->update([
            'user_password' => $new_password
        ]);
        Session::flash('success', 'Mật khẩu đã được cập nhật thành công.');
        return back();


    }

    public function submitPrescription(Request $request)
    {
        $data = array();

        $data['prescription_desc'] = $request->uploadDesc;
        $data['user_name'] = $request->uploadName;
        $data['user_phone'] = $request->uploadPhone;
        $data['user_id'] = $request->userId;
        $prescription_id = DB::table('tbl_prescription')->insertGetId($data);

        $prescription_images = $request->hiddenImageInput;
        if (!empty($prescription_images)) {
            $imageNames = explode(',', $prescription_images);
            $prescriptionData = [];
            foreach ($imageNames as $imageName) {
                $prescriptionData[] = [
                    'prescription_id' => $prescription_id,
                    'prescription_image' => $imageName,
                ];
            }
            DB::table('tbl_prescription_image')->insert($prescriptionData);
        }
        return back();
    }

    public function show_home()
    {

        $product = DB::table('tbl_product')
            ->join('tbl_category_product_detail', 'tbl_product.category_detail_id', '=', 'tbl_category_product_detail.category_detail_id')
            ->join('tbl_category_product', 'tbl_category_product_detail.category_id', '=', 'tbl_category_product.category_id')
            ->where('tbl_product.product_status', 1)
            ->orderBy('tbl_product.created_at_product', 'desc')
            ->get();
        $categories = DB::table('tbl_category_product')
            ->where('category_status', 1)
            ->orderBy('display_order')
            ->get();
        $categorie = DB::table('tbl_category_product_detail')->where('category_detail_status', 1)->get();
        $cate_post = DB::table('tbl_category_post')->where('cate_post_status', 0)->orderBy('display_order')->get();
        $post = DB::table('tbl_posts')->where('post_status', 0)->get();
        return view('home')->with('categories', $categories)
            ->with('categorie', $categorie)
            ->with('product', $product)
            ->with('cate_post', $cate_post)
            ->with('post', $post);

    }

    public function sendEmail(Request $request)
    {
        $email = $request->email;


        $existingEmail = DB::table('tbl_email_promotional')->where('email', $email)->first();

        if ($existingEmail) {
            return response()->json(['message' => 'Địa chỉ email đã tồn tại.']);
        } else {

            $isInserted = DB::table('tbl_email_promotional')->insert([
                'email' => $email
            ]);

            if ($isInserted) {

                return response()->json(['message' => 'Đăng ký nhận thông tin khuyến mãi thành công!']);
            } else {
                return response()->json(['message' => 'Đăng ký thất bại. Vui lòng thử lại sau.'], 500);
            }
        }
    }

    public function login_google_client()
    {
        config(['services.google.redirect' => 'http://127.0.0.1:8000/client/google/callback']);
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        config(['services.google.redirect' => 'http://127.0.0.1:8000/client/google/callback']);
        $user = Socialite::driver('google')->user();
        // dd($user);
        $existingUser = DB::table('tbl_user')->where('user_email', $user->getEmail())->first();
        if (!$existingUser) {
            DB::table('tbl_user')->insert([
                'user_name' => $user->getName(),
                'user_email' => $user->getEmail(),
            ]);

            $result = DB::table('tbl_user')->where('user_email', $user->getEmail())->first();
            if ($result) {
                Session::put('user_name', $result->user_name);
                Session::put('user_id', $result->user_id);
                return Redirect::to('/account');
            }
        }
        $result2 = DB::table('tbl_user')->where('user_email', $user->getEmail())->first();
        if ($result2) {
            Session::put('user_name', $result2->user_name);
            Session::put('user_id', $result2->user_id);
            return Redirect::to('/account');
        }
    }

    public function vnpay_payments()
    {
        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        // $vnp_Returnurl = "http://127.0.0.1:8000/checkout";
        // $vnp_TmnCode = "";//Mã website tại VNPAY
        // $vnp_HashSecret = ""; //Chuỗi bí mật

        // $vnp_TxnRef = $_POST['order_id']; //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        // $vnp_OrderInfo = $_POST['order_desc'];
        // $vnp_OrderType = $_POST['order_type'];
        // $vnp_Amount = $_POST['amount'] * 100;
        // $vnp_Locale = $_POST['language'];
        // $vnp_BankCode = $_POST['bank_code'];
        // $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
        // //Add Params of 2.0.1 Version
        // $vnp_ExpireDate = $_POST['txtexpire'];
        // //Billing
        // $vnp_Bill_Mobile = $_POST['txt_billing_mobile'];
        // $vnp_Bill_Email = $_POST['txt_billing_email'];
        // $fullName = trim($_POST['txt_billing_fullname']);
        // if (isset($fullName) && trim($fullName) != '') {
        //     $name = explode(' ', $fullName);
        //     $vnp_Bill_FirstName = array_shift($name);
        //     $vnp_Bill_LastName = array_pop($name);
        // }
        // $vnp_Bill_Address=$_POST['txt_inv_addr1'];
        // $vnp_Bill_City=$_POST['txt_bill_city'];
        // $vnp_Bill_Country=$_POST['txt_bill_country'];
        // $vnp_Bill_State=$_POST['txt_bill_state'];
        // // Invoice
        // $vnp_Inv_Phone=$_POST['txt_inv_mobile'];
        // $vnp_Inv_Email=$_POST['txt_inv_email'];
        // $vnp_Inv_Customer=$_POST['txt_inv_customer'];
        // $vnp_Inv_Address=$_POST['txt_inv_addr1'];
        // $vnp_Inv_Company=$_POST['txt_inv_company'];
        // $vnp_Inv_Taxcode=$_POST['txt_inv_taxcode'];
        // $vnp_Inv_Type=$_POST['cbo_inv_type'];
        // $inputData = array(
        //     "vnp_Version" => "2.1.0",
        //     "vnp_TmnCode" => $vnp_TmnCode,
        //     "vnp_Amount" => $vnp_Amount,
        //     "vnp_Command" => "pay",
        //     "vnp_CreateDate" => date('YmdHis'),
        //     "vnp_CurrCode" => "VND",
        //     "vnp_IpAddr" => $vnp_IpAddr,
        //     "vnp_Locale" => $vnp_Locale,
        //     "vnp_OrderInfo" => $vnp_OrderInfo,
        //     "vnp_OrderType" => $vnp_OrderType,
        //     "vnp_ReturnUrl" => $vnp_Returnurl,
        //     "vnp_TxnRef" => $vnp_TxnRef,
        //     "vnp_ExpireDate"=>$vnp_ExpireDate,
        //     "vnp_Bill_Mobile"=>$vnp_Bill_Mobile,
        //     "vnp_Bill_Email"=>$vnp_Bill_Email,
        //     "vnp_Bill_FirstName"=>$vnp_Bill_FirstName,
        //     "vnp_Bill_LastName"=>$vnp_Bill_LastName,
        //     "vnp_Bill_Address"=>$vnp_Bill_Address,
        //     "vnp_Bill_City"=>$vnp_Bill_City,
        //     "vnp_Bill_Country"=>$vnp_Bill_Country,
        //     "vnp_Inv_Phone"=>$vnp_Inv_Phone,
        //     "vnp_Inv_Email"=>$vnp_Inv_Email,
        //     "vnp_Inv_Customer"=>$vnp_Inv_Customer,
        //     "vnp_Inv_Address"=>$vnp_Inv_Address,
        //     "vnp_Inv_Company"=>$vnp_Inv_Company,
        //     "vnp_Inv_Taxcode"=>$vnp_Inv_Taxcode,
        //     "vnp_Inv_Type"=>$vnp_Inv_Type
        // );

        // if (isset($vnp_BankCode) && $vnp_BankCode != "") {
        //     $inputData['vnp_BankCode'] = $vnp_BankCode;
        // }
        // if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
        //     $inputData['vnp_Bill_State'] = $vnp_Bill_State;
        // }

        // //var_dump($inputData);
        // ksort($inputData);
        // $query = "";
        // $i = 0;
        // $hashdata = "";
        // foreach ($inputData as $key => $value) {
        //     if ($i == 1) {
        //         $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
        //     } else {
        //         $hashdata .= urlencode($key) . "=" . urlencode($value);
        //         $i = 1;
        //     }
        //     $query .= urlencode($key) . "=" . urlencode($value) . '&';
        // }

        // $vnp_Url = $vnp_Url . "?" . $query;
        // if (isset($vnp_HashSecret)) {
        //     $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret);//
        //     $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        // }
        // $returnData = array('code' => '00'
        //     , 'message' => 'success'
        //     , 'data' => $vnp_Url);
        //     if (isset($_POST['redirect'])) {
        //         header('Location: ' . $vnp_Url);
        //         die();
        //     } else {
        //         echo json_encode($returnData);
        //     }
    }

    public function filterProducts(Request $request)
    {
        $sortingOption = $request->input('sorting');
        $categoryId = $request->input('category_id');

        $query = DB::table('tbl_product')
            ->where('tbl_product.category_id', $categoryId)
            ->join('tbl_category_product_detail', 'tbl_product.category_detail_id', '=', 'tbl_category_product_detail.category_detail_id')
            ->join('tbl_category_product', 'tbl_category_product_detail.category_id', '=', 'tbl_category_product.category_id')
            ->where('tbl_product.product_status', 1);


        if ($sortingOption === 'newest') {
            $query->orderByDesc('created_at_product');
        } elseif ($sortingOption === 'price_desc') {
            $query->orderByDesc('product_price');
        } elseif ($sortingOption === 'price_asc') {
            $query->orderBy('product_price');
        }

        $filteredProducts = $query->get();


        return response()->json(['products' => $filteredProducts]);
    }


}
