<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
//        dd($posts);
        return view('posts.index',['posts'=>$posts]);
    }

//    public function show($id){
//         return $id;
//        $posts = [
//            [
//            'id'=>1,
//            'title'=>"Single Post title",
//            'img'=>"nkar.jpg"
//            ],
//            [
//                'id'=>2,
//                'title'=>"Single Post title",
//                'img'=> "nkar1.jpg"
//            ]
//        ];
//        $post = $posts[$id-1];
//        return view('posts.single',compact('post'));
        // return view('posts.single')->with('post',$post);
        // return view('posts.single',['post'=>$post]);
//    }
    public function show($id){
        $post= Post::findOrFail($id);
//        print_r($post);
        return view('posts.single',['post'=>$post]);
//        return view('posts.single')->with('post',$post);
//        return view('posts.single',['post' =>$post]);
    }

    public function create(){
        return view('posts.create');
    }
}

// with - erb mi popoxakan en stanum
