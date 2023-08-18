<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
session_start();

class Post extends Controller
{
    /// Admin
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }
    public function show_add_post(){
        $this->AuthLogin();
        $cate_post = DB::table('tbl_category_post')->orderBy('display_order')->get();
        return view('admin.post.add_post')->with('cate_post', $cate_post);
    }
    public function savePost(Request $request){
        $this->AuthLogin();
        $data = array();
        $data['post_title']= $request->post_title;
        $data['post_status']= $request->post_status;
        $data['post_slug']= $request->post_slug;
        $data['post_desc']= $request->post_desc;
        $data['post_content']= $request->post_content;
        $data['cate_post_id']= $request->cate_post_id;
       

        $get_image = $request->file('post_image');
        if ($get_image) {
            $get_name_image_post = $get_image->getClientOriginalName();
            $name_image_post = pathinfo($get_name_image_post, PATHINFO_FILENAME);
            $currentDateTime = date('Y-m-d H:i:s');
            $new_image_post = $name_image_post . '_' . $currentDateTime . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('uploads/post', $new_image_post);
            $data['post_image'] = $new_image_post;
            DB::table('tbl_posts')->insert($data);
            Session::flash('success', 'Thêm bài viết thành công!');
            return back();
        } else{
            Session::flash('error', 'Thêm bài viết thất bại!');
            return back();
        }

    }
    public function show_list_post(){
        $this->AuthLogin();
        $show_post = DB::table('tbl_posts')
                            ->leftJoin('tbl_category_post', 'tbl_posts.cate_post_id', '=', 'tbl_category_post.cate_post_id')
                            ->orderBy('tbl_posts.created_at')
                            ->get();
        
        return view('admin.post.list_post')->with('show_post', $show_post);
                                           
    }
    public function deletePost($postId){
        $this->AuthLogin();
        $post = DB::table('tbl_posts')->where('post_id', $postId)->first();
        $post_image = $post->post_image;
        unlink('uploads/post/'.$post_image);

        DB::table('tbl_posts')->where('post_id', $postId)->delete();
        

        return back();
    }
    /// Client
    public function show_goc_suc_khoe(){
        $categories = DB::table('tbl_category_product')->where('category_status', 1)->get();
        $categorie = DB::table('tbl_category_product_detail')->where('category_detail_status', 1)->get();
        $user = DB::table('tbl_user')->where('user_id', Session::get('user_id'))->first();
        $cate_post = DB::table('tbl_category_post')->where('cate_post_status', 0)->orderBy('display_order')->get();
        $post = DB::table('tbl_posts')->where('post_status', 0 )->get();
        $post_new = DB::table('tbl_posts')->where('post_status', 0 )->orderBy('created_at', 'desc')->get();
        return view('client_post.goc_suc_khoe')->with('categories', $categories)
                                               ->with('categorie', $categorie)
                                               ->with('user', $user)
                                               ->with('cate_post', $cate_post)
                                               ->with('post', $post)
                                               ->with('post_new', $post_new);
    }
    public function show_bai_viet($post_slug){
        $categories = DB::table('tbl_category_product')->where('category_status', 1)->get();
        $categorie = DB::table('tbl_category_product_detail')->where('category_detail_status', 1)->get();
        $user = DB::table('tbl_user')->where('user_id', Session::get('user_id'))->first();
        $cate_post = DB::table('tbl_category_post')->where('cate_post_status', 0)->orderBy('display_order')->get();
        $post = DB::table('tbl_posts')->where('post_status', 0 )->get();
        $post_new = DB::table('tbl_posts')->where('post_status', 0 )->orderBy('created_at', 'desc')->get();

        $post_sl = DB::table('tbl_posts')
            ->leftJoin('tbl_category_post', 'tbl_posts.cate_post_id', '=', 'tbl_category_post.cate_post_id')
            ->where('tbl_posts.post_slug', $post_slug)
            ->first();
      

        return view('client_post.tin_tuc')->with('categories', $categories)
                                               ->with('categorie', $categorie)
                                               ->with('user', $user)
                                               ->with('cate_post', $cate_post)
                                               ->with('post', $post)
                                               ->with('post_sl', $post_sl)
                                               ->with('post_new', $post_new);
    }
}
