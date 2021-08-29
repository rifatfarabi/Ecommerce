<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function BlogCatList(){
        $blogcat = DB::table('post_category')->get();
        return view('admin.blog.category.index',compact('blogcat'));
    }

    public function BlogCatStore(Request $request){
        $validateData = $request->validate([
            'category_name_en' =>'required|max:255',
            'category_name_in' =>'required|max:255',
        ]);

        $data = array();
        $data['category_name_en'] = $request->category_name_en;
        $data['category_name_in'] = $request->category_name_in;
        DB::table('post_category')->insert($data);
        $notification=array(
            'messege'=>'Blog Category Added Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
    }
}
