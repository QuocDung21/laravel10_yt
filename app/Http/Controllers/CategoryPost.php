<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class CategoryPost extends Controller
{
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }
    public function show_cate_post(){
        $this->AuthLogin();
        $post = DB::table('tbl_category_post')->orderBy('display_order')->get();
        return view('admin.post.add_category_post')->with('post', $post);
    }
    public function add_category_post(Request $request){
        $this->AuthLogin();
        $data = array();
        $data['cate_post_name'] = $request->cate_post_name;
        $data['cate_post_status'] = $request->cate_post_status;
        $data['cate_post_slug'] = $request->cate_post_slug;
        

        $displayOrder = DB::table('tbl_category_post')->max('display_order');
        $data['display_order'] = $displayOrder + 1;

        DB::table('tbl_category_post')->insert($data);

        if ($data) {
            return redirect()->back()->with('success', 'Thêm danh mục bài viết thành công!');
        } else {
            return redirect()->back()->with('error', 'Thêm danh mục bài viết thất bại!');
        }
    }
    public function delete_category_post($catepostId){
        $deleted = DB::table('tbl_category_post')->where('cate_post_id', $catepostId)->delete();
        return back();
    }
    public function move_up_post($catepostId){
       // Lấy danh mục hiện tại
            $currentCategory = DB::table('tbl_category_post')
            ->where('cate_post_id', $catepostId)
            ->first();
        
        if ($currentCategory) {
            // Tìm danh mục có vị trí trước đó
            $previousCategory = DB::table('tbl_category_post')
                ->where('display_order', '<', $currentCategory->display_order)
                ->orderBy('display_order', 'desc')
                ->first();
                
            if ($previousCategory) {
                // Hoán đổi vị trí giữa danh mục hiện tại và danh mục trước đó
                $tempOrder = $currentCategory->display_order;
                $currentCategory->display_order = $previousCategory->display_order;
                $previousCategory->display_order = $tempOrder;
                
                // Lưu thay đổi vào cơ sở dữ liệu
                DB::table('tbl_category_post')->where('cate_post_id', $currentCategory->cate_post_id)->update(['display_order' => $currentCategory->display_order]);
                DB::table('tbl_category_post')->where('cate_post_id', $previousCategory->cate_post_id)->update(['display_order' => $previousCategory->display_order]);
            }
        }
        
        return redirect()->back();
    }
    public function getCatePostInfo($postId){
        $post = DB::table('tbl_category_post')->where('cate_post_id', $postId)->first();
        return response()->json($post);
    }
    public function updateCategoryPost(Request $request){
        $postId = $request->postId;
        $postName = $request->postName;
        $postStatus = $request->postStatus;
        DB::table('tbl_category_post')->where('cate_post_id', $postId)->update([
            'cate_post_name' => $postName,
            'cate_post_status' =>$postStatus
        ]);
        return back();
    }
    
    
}
