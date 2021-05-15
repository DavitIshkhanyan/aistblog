<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Post;

class AdminController extends Controller
{
    public function index()
    {
        $post_count = Post::all()->count();
        return view('admin.home.admin_index',[
            'post_count'=>$post_count
        ]);
    }
    public function posts()
    {
        $posts = Post::all();
        return view('admin.home.admin_posts',['posts'=>$posts]);
    }
}
