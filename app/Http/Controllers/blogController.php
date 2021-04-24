<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class blogController extends Controller
{
    public function index($type){
        if($type == 'all'){
            $blogs = Blog::get();
        }else{
            $blogs = Blog::where('type',$type)->get();
        }
        return view('pages.blog',['blogs'=>$blogs]);
    }

    public function addblog(){
        $blog=null;
        return view('admin.addblogs',['blog'=>$blog]);
    }
    public function store(Request $req){
        $blog = new Blog;
        $blog->title=$req->title;
        $blog->brief = $req->brief;
        $blog->author = $req->author;
        $blog->type=$req->type;
        $blog->content=$req->content;
        $blog->save();
        return redirect()->route('dashboard');
    }

    public function detail(){
        $blogs = Blog::all();
        return view('admin.blogsDetail',['blogs'=>$blogs]);
    }
    public function blogDelete($id){
        $blog = Blog::find($id);
        $blog->delete();
        return back();
    }
    public function blogEdit($id){
        $blog = Blog::find($id);
        return view('admin.addblogs',['blog'=>$blog]);
    }

    public function edit(Request $req,$id){
        $blog = Blog::find($id);
        $blog->title=$req->title;
        $blog->author=$req->author;
        $blog->brief=$req->brief;
        $blog->type=$req->type;
        $blog->content=$req->content;
        $blog->save();
        return redirect()->route('dashboard');
    }

    public function readmore($id){
        $blog = Blog::find($id);
        return view('pages.blogDetails',['blog'=>$blog]);
    }
}
