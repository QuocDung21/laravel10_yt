<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Str;

session_start();

class CategoryProduct extends Controller
{

    public function AuthLogin()
    {
        $admin_id = Session::get('admin_id');
        if ($admin_id) {
            return Redirect::to('dashboard');
        } else {
            return Redirect::to('admin')->send();
        }
    }

    public function category_product()
    {
        $this->AuthLogin();
        return view('admin.category_product');
    }

    public function all_category_product()
    {
        $this->AuthLogin();
        $all_category_product = DB::table('tbl_category_product')
            ->orderBy('display_order')
            ->get();

        $manager_category_product = view('admin.category_product')
            ->with('all_category_product', $all_category_product);

        return $manager_category_product;
    }

    public function save_category_product(Request $request)
    {
        $data = array();
        $data['category_name'] = $request->name_category;
        $data['category_status'] = $request->status_category;

        $displayOrder = DB::table('tbl_category_product')->max('display_order');
        $data['display_order'] = $displayOrder + 1;

        $get_image_category = $request->file('img_category');

        if ($get_image_category) {
            $get_name_image_category = $get_image_category->getClientOriginalName();
            $name_image_category = current(explode('.', $get_name_image_category));

            // Thay đổi để tạo số ngẫu nhiên
            $randomString = Str::random(10); // 10 là độ dài của chuỗi ngẫu nhiên, bạn có thể điều chỉnh nó

            $new_image_category = $name_image_category . '_' . $randomString . '.' . $get_image_category->getClientOriginalExtension();
            $get_image_category->move('uploads/category', $new_image_category);

            $data['category_img'] = $new_image_category;
            $displayOrder = DB::table('tbl_category_product')->max('display_order');
            $data['display_order'] = $displayOrder + 1;
            DB::table('tbl_category_product')->insert($data);

            return back();
        }


        DB::table('tbl_category_product')->insert($data);

        return Redirect::to('category-product');
    }

    public function moveUpCategory($categoryId)
    {
        // Lấy danh mục hiện tại
        $currentCategory = DB::table('tbl_category_product')
            ->where('category_id', $categoryId)
            ->first();

        if ($currentCategory) {
            // Tìm danh mục có vị trí trước đó
            $previousCategory = DB::table('tbl_category_product')
                ->where('display_order', '<', $currentCategory->display_order)
                ->orderBy('display_order', 'desc')
                ->first();

            if ($previousCategory) {
                // Hoán đổi vị trí giữa danh mục hiện tại và danh mục trước đó
                $tempOrder = $currentCategory->display_order;
                $currentCategory->display_order = $previousCategory->display_order;
                $previousCategory->display_order = $tempOrder;

                // Lưu thay đổi vào cơ sở dữ liệu
                DB::table('tbl_category_product')->where('category_id', $currentCategory->category_id)->update(['display_order' => $currentCategory->display_order]);
                DB::table('tbl_category_product')->where('category_id', $previousCategory->category_id)->update(['display_order' => $previousCategory->display_order]);
            }
        }

        return redirect()->back();
    }


    public function update_category_product(Request $request, $category_product_id)
    {
        $data = array();
        $data['category_name'] = $request->name_category;
        $data['category_status'] = $request->status_category;
        $get_image_category = $request->file('img_category');


        if ($get_image_category) {
            $get_name_image_category = $get_image_category->getClientOriginalName();
            $name_image_category = current(explode('.', $get_name_image_category));
            // Thay đổi đoạn mã để tạo số ngẫu nhiên
            $randomNumber = mt_rand(1000, 9999); // Đổi giới hạn theo mong muốn của bạn
            $new_image_category = $name_image_category . '_' . $randomNumber . '.' . $get_image_category->getClientOriginalExtension();
            $get_image_category->move('uploads/category', $new_image_category);
            $data['category_img'] = $new_image_category;
            DB::table('tbl_category_product')->where('category_id', $category_product_id)->update($data);
            return back();
        }

        DB::table('tbl_category_product')->where('category_id', $category_product_id)->update($data);

        return back();

    }
    // public function updateCategoryDetail(Request $request, $category_detail_id)
    // {
    //     // Tìm kiếm danh mục dựa trên category_detail_id hoặc ném ra ngoại lệ nếu không tìm thấy


    //     $data  = array();
    //     $data['category_detail_name']= $request->name_category_detail;
    //     $data['category_detail_status']= $request->status_category_detail;

    //     $get_image_category_detail = $request->file('img_category_detail');
    //     if($get_image_category_detail){
    //         $get_name_image_category_detail = $get_image_category_detail->getClientOriginalName();
    //         $name_image_category_detail = current(explode('.', $get_name_image_category_detail));
    //         $currentDateTime = date('Y-m-d H:i:s');
    //         $new_image_category_detail = $name_image_category_detail.'_'.$currentDateTime.'.'.$get_image_category_detail->getClientOriginalExtension();
    //         $get_image_category_detail->move('uploads/category-detail', $new_image_category_detail);
    //         $data['category_detail_img'] = $new_image_category_detail;
    //         DB::table('tbl_category_product_detail')->where('category_detail_id', $category_detail_id)->update($data);

    //         return back();
    //     }

    //     DB::table('tbl_category_product_detail')->where('category_detail_id', $category_detail_id)->update($data);

    //         return back();
    // }
    public function updateCategoryDetail($category_id, $category_detail_id, Request $request)
    {

        $data = array();
        $data['category_detail_name'] = $request->name_category_detail;
        $data['category_detail_status'] = $request->status_category_detail;


        $get_image_category_detail = $request->file('img_category_detail');
        if ($get_image_category_detail) {
            $get_name_image_category_detail = $get_image_category_detail->getClientOriginalName();
            $name_image_category_detail = pathinfo($get_name_image_category_detail, PATHINFO_FILENAME);
            $currentDateTime = date('Y-m-d_H:i:s');
            $new_image_category_detail = $name_image_category_detail . '_' . $currentDateTime . '.' . $get_image_category_detail->getClientOriginalExtension();
            $get_image_category_detail->move('uploads/category-detail', $new_image_category_detail);
            $data['category_detail_img'] = $new_image_category_detail;
        }

        // Thực hiện cập nhật danh mục chi tiết
        try {
            DB::table('tbl_category_product_detail')->where('category_id', $category_id)->where('category_detail_id', $category_detail_id)->update($data);
            return back();
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Lỗi cập nhật danh mục chi tiết');
        }
    }



    // public function edit_category_product($category_product_id){
    //     $edit_category_product = DB::table('tbl_category_product')->where('category_id', $category_product_id)->get();
    //     $manager_category_product = view('admin.edit_category_product')->with('edit_category_product', $edit_category_product);
    //     return $manager_category_product;

    //     $cate_detail = DB::table('tbl_category_product')->orderBy('category_id','desc')-> get();
    //     $category_by_id = DB::table('tbl_category_product_detail')->join('tbl_category_product','tbl_category_product_detail.category_id','=','tbl_category_product.category_id')->where('tbl_category_product_detail.category_id', $category_product_id)->get();
    //     return view('admin,edit_category_product')->with('category', $cate_detail)->with('category_by_id', $category_by_id);

    // }

    // public function edit_category_product($category_product_id) {
    //     $edit_category_product = DB::table('tbl_category_product')->where('category_id', $category_product_id)->get();
    //     $cate_detail = DB::table('tbl_category_product')->orderBy('category_id','desc')->get();
    //     $category_by_id = DB::table('tbl_category_product_detail')->join('tbl_category_product','tbl_category_product_detail.category_id','=','tbl_category_product.category_id')->where('tbl_category_product_detail.category_id', $category_product_id)->get();

    //     return view('admin.edit_category_product')->with('edit_category_product', $edit_category_product)->with('category_by_id', $category_by_id)->with('cate_detail', $cate_detail);
    // }

    public function edit_category_product($category_product_id)
    {
        $this->AuthLogin();
        $edit_category_product = DB::table('tbl_category_product')->where('category_id', $category_product_id)->get();
        $cate_detail = DB::table('tbl_category_product')->orderBy('category_id', 'desc')->get();
        $category_by_id = DB::table('tbl_category_product_detail')->join('tbl_category_product', 'tbl_category_product_detail.category_id', '=', 'tbl_category_product.category_id')->where('tbl_category_product_detail.category_id', $category_product_id)->get();

        return view('admin.edit_category_product')->with('edit_category_product', $edit_category_product)->with('category_by_id', $category_by_id)->with('cate_detail', $cate_detail);
    }


    public function delete_category_product($category_product_id)
    {
        DB::table('tbl_category_product')->where('category_id', $category_product_id)->delete();

        return back();

    }

    public function delete_category_product_2($category_product_id)
    {
        DB::table('tbl_category_product_detail')->where('category_detail_id', $category_product_id)->delete();

        return back();

    }


    ///

    ////

    public function save_category_product_2(Request $request)
    {
        $this->AuthLogin();
        $data = array();
        $data['category_detail_name'] = $request->name_category_2;
        $data['category_detail_status'] = $request->status_category_2;
        // $data['category_detail_img'] = $request->img_category_2;
        $data['category_id'] = $request->category_id;

        $get_image_category = $request->file('img_category_2');
        if ($get_image_category) {
            $get_name_image_category = $get_image_category->getClientOriginalName();
            $name_image_category = current(explode('.', $get_name_image_category));
            $currentDateTime = date('Y-m-d H:i:s');
            $new_image_category = $name_image_category . '_' . $currentDateTime . '.' . $get_image_category->getClientOriginalExtension();
            $get_image_category->move('uploads/category-detail', $new_image_category);
            $data['category_detail_img'] = $new_image_category;
            DB::table('tbl_category_product_detail')->insert($data);

            return back();
        }


        return back();
    }

    /// edit


    public function show_category_upload()
    {

        $categories = DB::table('tbl_category_product')->where('category_status', 1)->get();
        $categorie = DB::table('tbl_category_product_detail')->where('category_detail_status', 1)->get();
        return view('upload')->with('categories', $categories)->with('categorie', $categorie);

    }

    public function show_category_category()
    {

        $categories = DB::table('tbl_category_product')->where('category_status', 1)->get();
        $categorie = DB::table('tbl_category_product_detail')->where('category_detail_status', 1)->get();
        return view('category')->with('categories', $categories)->with('categorie', $categorie);

    }

    public function show_category_account()
    {

        $categories = DB::table('tbl_category_product')->where('category_status', 1)->get();
        $categorie = DB::table('tbl_category_product_detail')->where('category_detail_status', 1)->get();
        $user = DB::table('tbl_user')->where('user_id', Session::get('user_id'))->first();

        // Pass the user_sex value to the view

        return view('client.account')->with('categories', $categories)->with('categorie', $categorie)->with('user', $user);

    }


}
