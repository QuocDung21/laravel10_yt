<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;



session_start();

class ProductController extends Controller
{
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }
    public function add_product(){
        $this->AuthLogin();
        $categories = DB::table('tbl_category_product')->where('category_status', 1)->get();
        $categories_detail = DB::table('tbl_category_product_detail')->where('category_detail_status', 1)->get();
        return view('admin.add_product')->with('categories', $categories)
                                        ->with('categories_detail', $categories_detail);
    }
    public function product_list(){
        $this->AuthLogin();
        return view('admin.product_list');
    }
    
    public function show_product_cate($category_id, $category_detail_id)
    {
        $this->AuthLogin();
        $show_category_detail = DB::table('tbl_category_product_detail')
            ->where('category_detail_id', $category_detail_id)
            ->get();

        $cate_detail = DB::table('tbl_category_product_detail')
            ->orderBy('category_detail_id', 'desc')
            ->get();
        
        

        $product_by_id = DB::table('tbl_product')
            ->join('tbl_category_product_detail', 'tbl_product.category_detail_id', '=', 'tbl_category_product_detail.category_detail_id')
            ->join('tbl_category_product', 'tbl_category_product_detail.category_id', '=', 'tbl_category_product.category_id')
            ->where('tbl_category_product.category_id', $category_id)
            ->where('tbl_product.category_detail_id', $category_detail_id)
            ->get();

        

        return view('admin.add_product_cate')
            ->with('category_id', $category_id)
            ->with('category_detail_id', $category_detail_id)
            ->with('show_product_cate', $show_category_detail)
            ->with('product_by_id', $product_by_id)
            ->with('cate_detail', $cate_detail);
            
            
    }

    public function show_all_products()
    {
        $this->AuthLogin();
        
        $productsPerPage = 50;
        
        $products = DB::table('tbl_product')
            ->leftJoin('tbl_category_product_detail', 'tbl_product.category_detail_id', '=', 'tbl_category_product_detail.category_detail_id')
            ->leftJoin('tbl_category_product', 'tbl_category_product_detail.category_id', '=', 'tbl_category_product.category_id')
            ->paginate($productsPerPage);

        

        
            

        $categories = DB::table('tbl_category_product')->get();
        

        return view('admin.product_list')
            ->with('products', $products)
         
            ->with('categories', $categories);
           
            
    }

    public function edit_product($product_id)
    {
        $this->AuthLogin();
        // Lấy thông tin sản phẩm
        $product = DB::table('tbl_product')
            ->join('tbl_category_product', 'tbl_product.category_id', '=', 'tbl_category_product.category_id')
            
            ->join('tbl_description', 'tbl_product.product_id', '=', 'tbl_description.product_id')
            ->where('tbl_product.product_id', $product_id)
            
            ->get();
        $descriptions = DB::table('tbl_description')
            ->where('product_id', $product_id)
            ->get();

    

        // Lấy danh sách danh mục
        $categories = DB::table('tbl_category_product')->get();

        // Lấy danh sách danh mục con của danh mục chính hiện tại
        $category_details = [];
        if ($product->isNotEmpty() && $product->first()->category_id) {
            $category_details = DB::table('tbl_category_product_detail')
                ->where('category_id', $product->first()->category_id)
                ->get();
        }

        return view('admin.edit_product', compact('product', 'categories', 'category_details','descriptions'));
    }



    public function getCategoryDetails($category_id)
    {
        $category_details = DB::table('tbl_category_product_detail')
            ->where('category_id', $category_id)
            ->get();

        return response()->json($category_details);
    }

    public function applyPriceFilter(Request $request){
        $filters = $request->input('filters');
        $products = DB::table('tbl_product')->whereIn('product_price', [$filters])->get();


        return response()->json(['products' => $products]);
    }

    public function addProduct(Request $request){
        $data = array();
        $data['category_id'] = $request->categoryProduct;
        $data['category_detail_id'] = $request->categoryDetail;
        $data['product_name'] = $request->nameProduct;
        $data['product_desc'] = $request->descProduct;
        $data['product_price_in'] = $request->priceProductIn;
        $data['product_price_old'] = $request->priceProductOld;
        $data['product_price'] = $request->priceProductOut;
        $data['product_status'] = $request->statusProduct;
        $data['product_out'] = $request->outProduct;
        $data['productUnit'] = $request->unitProduct;
        

        $get_image_product1 = $request -> file('imgProduct1');
        $get_image_product2 = $request -> file('imgProduct2');
        $get_image_product3 = $request -> file('imgProduct3');
        $get_image_product4 = $request -> file('imgProduct4');

        if ($get_image_product1) {
            $get_name_image_product = $get_image_product1->getClientOriginalName();
            $name_image_product = pathinfo($get_name_image_product, PATHINFO_FILENAME);
            $currentDateTime = date('Y-m-d H:i:s');
            $new_image_product = $name_image_product . '_' . $currentDateTime . '.' . $get_image_product1->getClientOriginalExtension();
            $get_image_product1->move('uploads/product', $new_image_product);
            $data['product_img1'] = $new_image_product;
        }
    
        if ($get_image_product2) {
            $get_name_image_product = $get_image_product2->getClientOriginalName();
            $name_image_product = pathinfo($get_name_image_product, PATHINFO_FILENAME);
            $currentDateTime = date('Y-m-d H:i:s');
            $new_image_product = $name_image_product . '_' . $currentDateTime . '.' . $get_image_product2->getClientOriginalExtension();
            $get_image_product2->move('uploads/product', $new_image_product);
            $data['product_img2'] = $new_image_product;
        }
    
        if ($get_image_product3) {
            $get_name_image_product = $get_image_product3->getClientOriginalName();
            $name_image_product = pathinfo($get_name_image_product, PATHINFO_FILENAME);
            $currentDateTime = date('Y-m-d H:i:s');
            $new_image_product = $name_image_product . '_' . $currentDateTime . '.' . $get_image_product3->getClientOriginalExtension();
            $get_image_product3->move('uploads/product', $new_image_product);
            $data['product_img3'] = $new_image_product;
        }
    
        if ($get_image_product4) {
            $get_name_image_product = $get_image_product4->getClientOriginalName();
            $name_image_product = pathinfo($get_name_image_product, PATHINFO_FILENAME);
            $currentDateTime = date('Y-m-d H:i:s');
            $new_image_product = $name_image_product . '_' . $currentDateTime . '.' . $get_image_product4->getClientOriginalExtension();
            $get_image_product4->move('uploads/product', $new_image_product);
            $data['product_img4'] = $new_image_product;
        }

        $product_id = DB::table('tbl_product')->insertGetId($data);

        $descriptionTitles = $request->input('title');
        $descriptionContents = $request->input('content');
        if (!empty($descriptionTitles) && is_array($descriptionTitles)) {
            // Lặp qua từng mô tả
            foreach ($descriptionTitles as $key => $title) {
                // Lấy tiêu đề và nội dung tương ứng
                $descriptionTitle = $title;
                $descriptionContent = $descriptionContents[$key] ?? '';
    
                $descriptionData[] = [
                    'product_id' => $product_id,
                    'description_title' => $descriptionTitle,
                    'description_detail' => $descriptionContent,
                ];
            }
            DB::table('tbl_description')->insert($descriptionData);
        }
        Session::flash('success', 'Thêm sản phẩm mới thành công!');
        return back();
    }
   
    





    public function add_product_cate(Request $request, $category_id, $category_detail_id){
        
        $data = array();
        $data['product_name'] = $request -> nameProduct;
        $data['category_id'] = $category_id;
        $data['category_detail_id'] = $category_detail_id;
        
        $data['product_desc'] = $request -> descProduct;
        $data['product_price_in'] = $request -> priceProductIn;
        $data['product_price_old'] = $request -> priceProductOld;
        $data['product_price'] = $request -> priceProductOut;
        $data['product_status'] = $request -> statusProduct;
        $data['product_out'] = $request -> outProduct;
        $data['productUnit'] = $request -> unitProduct;
    
        
       

        $get_image_product1 = $request -> file('imgProduct1');
        $get_image_product2 = $request -> file('imgProduct2');
        $get_image_product3 = $request -> file('imgProduct3');
        $get_image_product4 = $request -> file('imgProduct4');

        

        if ($get_image_product1) {
            $get_name_image_product = $get_image_product1->getClientOriginalName();
            $name_image_product = pathinfo($get_name_image_product, PATHINFO_FILENAME);
            $currentDateTime = date('Y-m-d H:i:s');
            $new_image_product = $name_image_product . '_' . $currentDateTime . '.' . $get_image_product1->getClientOriginalExtension();
            $get_image_product1->move('uploads/product', $new_image_product);
            $data['product_img1'] = $new_image_product;
        }
    
        if ($get_image_product2) {
            $get_name_image_product = $get_image_product2->getClientOriginalName();
            $name_image_product = pathinfo($get_name_image_product, PATHINFO_FILENAME);
            $currentDateTime = date('Y-m-d H:i:s');
            $new_image_product = $name_image_product . '_' . $currentDateTime . '.' . $get_image_product2->getClientOriginalExtension();
            $get_image_product2->move('uploads/product', $new_image_product);
            $data['product_img2'] = $new_image_product;
        }
    
        if ($get_image_product3) {
            $get_name_image_product = $get_image_product3->getClientOriginalName();
            $name_image_product = pathinfo($get_name_image_product, PATHINFO_FILENAME);
            $currentDateTime = date('Y-m-d H:i:s');
            $new_image_product = $name_image_product . '_' . $currentDateTime . '.' . $get_image_product3->getClientOriginalExtension();
            $get_image_product3->move('uploads/product', $new_image_product);
            $data['product_img3'] = $new_image_product;
        }
    
        if ($get_image_product4) {
            $get_name_image_product = $get_image_product4->getClientOriginalName();
            $name_image_product = pathinfo($get_name_image_product, PATHINFO_FILENAME);
            $currentDateTime = date('Y-m-d H:i:s');
            $new_image_product = $name_image_product . '_' . $currentDateTime . '.' . $get_image_product4->getClientOriginalExtension();
            $get_image_product4->move('uploads/product', $new_image_product);
            $data['product_img4'] = $new_image_product;
        }

        $product_id = DB::table('tbl_product')->insertGetId($data);

        $descriptionTitles = $request->input('title');
        $descriptionContents = $request->input('content');

        if (!empty($descriptionTitles) && is_array($descriptionTitles)) {
            // Lặp qua từng mô tả
            foreach ($descriptionTitles as $key => $title) {
                // Lấy tiêu đề và nội dung tương ứng
                $descriptionTitle = $title;
                $descriptionContent = $descriptionContents[$key] ?? '';
                
                $descriptionData[] = [
                    'product_id' => $product_id,
                    'description_title' => $descriptionTitle,
                    'description_detail' => $descriptionContent,
                ];
            }
            DB::table('tbl_description')->insert($descriptionData);
        }


        Session::flash('success', 'Thêm sản phẩm mới thành công!');
        return back();


    }
    

    public function update_product(Request $request, $product_id)
    {
        $data = array();
        $data['product_name'] = $request->nameProduct;
        $data['category_id'] = $request->categoryProduct;
        $data['category_detail_id'] = $request->categoryDetail;
        
        $data['product_desc'] = $request->descProduct;
        $data['product_price_in'] = $request->priceProductIn;
        $data['product_price_old'] = $request->priceProductOld;
        $data['product_price'] = $request->priceProductOut;
        $data['product_status'] = $request->statusProduct;
        $data['product_out'] = $request->outProduct;
        $data['productUnit'] = $request->unitProduct;
       

        // Update the product images if new ones are provided
        if ($request->hasFile('imgProduct1')) {
            $get_image_product1 = $request->file('imgProduct1');
            $get_name_image_product = $get_image_product1->getClientOriginalName();
            $name_image_product = pathinfo($get_name_image_product, PATHINFO_FILENAME);
            $currentDateTime = date('Y-m-d H:i:s');
            $new_image_product = $name_image_product . '_' . $currentDateTime . '.' . $get_image_product1->getClientOriginalExtension();
            $get_image_product1->move('uploads/product', $new_image_product);
            $data['product_img1'] = $new_image_product;
        }

        if ($request->hasFile('imgProduct2')) {
            $get_image_product2 = $request->file('imgProduct2');
            $get_name_image_product = $get_image_product2->getClientOriginalName();
            $name_image_product = pathinfo($get_name_image_product, PATHINFO_FILENAME);
            $currentDateTime = date('Y-m-d H:i:s');
            $new_image_product = $name_image_product . '_' . $currentDateTime . '.' . $get_image_product2->getClientOriginalExtension();
            $get_image_product2->move('uploads/product', $new_image_product);
            $data['product_img2'] = $new_image_product;
        }

        if ($request->hasFile('imgProduct3')) {
            $get_image_product3 = $request->file('imgProduct3');
            $get_name_image_product = $get_image_product3->getClientOriginalName();
            $name_image_product = pathinfo($get_name_image_product, PATHINFO_FILENAME);
            $currentDateTime = date('Y-m-d H:i:s');
            $new_image_product = $name_image_product . '_' . $currentDateTime . '.' . $get_image_product3->getClientOriginalExtension();
            $get_image_product3->move('uploads/product', $new_image_product);
            $data['product_img3'] = $new_image_product;
        }

        if ($request->hasFile('imgProduct4')) {
            $get_image_product4 = $request->file('imgProduct4');
            $get_name_image_product = $get_image_product4->getClientOriginalName();
            $name_image_product = pathinfo($get_name_image_product, PATHINFO_FILENAME);
            $currentDateTime = date('Y-m-d H:i:s');
            $new_image_product = $name_image_product . '_' . $currentDateTime . '.' . $get_image_product4->getClientOriginalExtension();
            $get_image_product4->move('uploads/product', $new_image_product);
            $data['product_img4'] = $new_image_product;
        }
      

       

        DB::table('tbl_product')
        ->where('product_id', $product_id)
        ->update($data);

        $descriptionTitles = $request->input('title');
        $descriptionContents = $request->input('content');

        if (!empty($descriptionTitles) && is_array($descriptionTitles)) {
            foreach ($descriptionTitles as $key => $title) {
                $descriptionTitle = $title;
                $descriptionContent = $descriptionContents[$key] ?? '';

                // Update the description data
                $descriptionData = [
                    'product_id' => $product_id,
                    'description_title' => $descriptionTitle,
                    'description_detail' => $descriptionContent,
                ];

                // Update the description in tbl_description table
                DB::table('tbl_description')
                    ->where('product_id', $product_id)
                    ->where('description_id', $key + 1) // Assuming description_id starts from 1
                    ->update($descriptionData);

                    
            }

        Session::flash('successUpDate', 'Cập nhật sản phẩm thành công!');
        return back();
    }

    }

    public function detail_product($product_id){
        
        $categories = DB::table('tbl_category_product')->where('category_status', 1)->get();
        $categorie = DB::table('tbl_category_product_detail')->where('category_detail_status', 1)->get();
        $product = DB::table('tbl_product')
            ->join('tbl_category_product_detail', 'tbl_product.category_detail_id', '=', 'tbl_category_product_detail.category_detail_id')
            ->join('tbl_category_product', 'tbl_category_product_detail.category_id', '=', 'tbl_category_product.category_id')
            
            ->join('tbl_description', 'tbl_product.product_id', '=', 'tbl_description.product_id')
            ->where('tbl_product.product_id', $product_id)
           
            ->get();

            
        return view('detail')->with('categories', $categories)->with('categorie', $categorie)->with('product', $product);
        
    }
    public function show_cart(Request $request){
        $categories = DB::table('tbl_category_product')->where('category_status', 1)->get();
        $categorie = DB::table('tbl_category_product_detail')->where('category_detail_status', 1)->get();
        $url_canonical = $request->url();
        

        
        return view('cart')->with('categories', $categories)->with('categorie', $categorie)->with('url_canonical', $url_canonical);
        
    }

    

    public function add_cart_ajax(Request $request)
    {
        $data = $request->all();

        $session_id = substr(md5(microtime()), rand(0, 26), 5);
        $cart = Session::get('cart');

        if ($cart == null) {
            $cart = [];
        }

        $is_available = false;

        foreach ($cart as $key => $val) {
            if ($val['product_id'] == $data['cart_product_id']) {
                $is_available = true;
                break;
            }
        }

        if (!$is_available) {
            $cart[] = array(
                'session_id' => $session_id,
                'product_name' => $data['cart_product_name'],
                'product_id' => $data['cart_product_id'],
                'product_img1' => $data['cart_product_img1'],
                'product_price' => $data['cart_product_price'],
                'product_price_old' => $data['cart_product_price_old'],
                'product_unit' => $data['cart_product_unit'],
                'product_quantity' => $data['cart_product_quantity']
            );

            Session::put('cart', $cart);
            Session::save();
        }
    }

    public function show_checkout(Request $request){
        $categories = DB::table('tbl_category_product')->where('category_status', 1)->get();
        $categorie = DB::table('tbl_category_product_detail')->where('category_detail_status', 1)->get();
        $url_canonical = $request->url();

        $user_id = Session::get('user_id');
        $addresses = DB::table('tbl_user_address')->where('user_id', $user_id)->orderBy('is_default', 'desc')->get();
        
        $orders0 = DB::table('tbl_shipping_unit')
                            ->where('shipping_method', 0)
                            ->where('shipping_status', 0)
                            ->get();
                            $defaultOrder = $orders0->firstWhere('is_default', 1);
                            if ($defaultOrder) {
                                $orders0 = $orders0->filter(function ($order0) use ($defaultOrder) {
                                    return $order0->shipping_id !== $defaultOrder->shipping_id;
                                });
                            
                                // Sau đó, chèn dòng có "is_default" = 1 vào đầu danh sách $orders0
                                $orders0->prepend($defaultOrder);
                            }

        $orders1 = DB::table('tbl_shipping_unit')
                            ->where('shipping_method', 1)
                            ->where('shipping_status', 0)
                            ->get();
                            $defaultOrder1 = $orders1->firstWhere('is_default', 1);
                            if ($defaultOrder1) {
                                $orders1 = $orders1->filter(function ($order1) use ($defaultOrder1) {
                                    return $order1->shipping_id !== $defaultOrder1->shipping_id;
                                });
                            
                                // Sau đó, chèn dòng có "is_default" = 1 vào đầu danh sách $orders0
                                $orders1->prepend($defaultOrder1);
                            }

        $shipping = DB::table('tbl_shipping_unit')->where('is_default', 1)->where('shipping_status', 0)->get();

        
        return view('checkout')->with('categories', $categories)
                               ->with('categorie', $categorie)
                               ->with('url_canonical', $url_canonical)
                               ->with('addresses', $addresses)
                               ->with('orders0', $orders0)
                               ->with('orders1', $orders1)
                               ->with('shipping', $shipping);
        
    }

    






    public function delete_item_product($session_id){
        $cart = Session::get('cart');
        if($cart == true){
            foreach($cart as $key => $val){
                if($val['session_id'] == $session_id){
                    unset($cart[$key]);
                }
            }
            Session::put('cart', $cart);
            return redirect()->back();
        } else{
            return redirect()->back();
        }
    }
    public function delete_all_cart(){
        Session::forget('cart');
        return redirect()->back();
    }
    // public function update_item_product(Request $request){
    //     $data = $request->all();
    //     $cart = Session::get('cart');
    //     if($cart ==  true){
    //         foreach($data['cart-quantity'] as $key => $quantity){
    //             foreach($cart as $session => $val){
    //                 if($val['session_id'] == $key){
    //                     $cart[$session]['product_quantity'] = $quantity;
    //                 }
    //             }
    //         }
    //         Session::put('cart', $cart);
    //         return back();
    //     }
    //     return back();
    // }
    public function update_item_product(Request $request)
    {
        $data = $request->all();
        $cart = Session::get('cart');

        if ($cart != null) {
            foreach ($data['cart-quantity'] as $key => $quantity) {
                foreach ($cart as $session => $val) {
                    if ($val['session_id'] == $key) {
                        $cart[$session]['product_quantity'] = $quantity;
                    }
                }
            }

            Session::put('cart', $cart);
        }

        return back();
    }
    public function searchProducts(Request $request)
    {
        $keyword = $request->input('keyword');
        
       
        $products = DB::table('tbl_product')->where('product_name', 'like', '%' . $keyword . '%')->get();
        
       
        return response()->json($products);
    }
    public function getCategoryDetails2(Request $request, $category_id){
        $categoryDetails = DB::table('tbl_category_product_detail')->where('category_id', $category_id)->get();
        return response()->json($categoryDetails);
    }
    

    

}
