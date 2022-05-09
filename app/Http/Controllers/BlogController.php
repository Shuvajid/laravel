<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
   public function allBlog(){
       $display_datas  = Blog::all();
       return view('blogs/all',compact('display_datas'));
   }


   public function addBlog(){
       return view('blogs/add');
   }

   public function storeBlog(Request $request){
       $store_data = new Blog();
       $store_data->blogname = $request->blogname;
       $store_data->blogdes = $request->blogdes;
       $store_data->save();
       return redirect(route('all.blog'));

   }

   public function singleBlog($id){
       $single_data = Blog::find($id);
       return view('blogs/single',compact('single_data'));
   }
   public function editBlog($id){
       $edit_data = Blog::find($id);
       return view('blogs/edit',compact('edit_data'));
   }

   public function updateBlog( Request $request ,$id){
       $update_data = Blog::find($id);
       $update_data->blogname = $request->blogname;
       $update_data->blogdes = $request->blogdes;
       $update_data->save();
       return redirect(route('all.blog'));
    
   }
}
