<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('posts.index');
    }

    public function show($id){
        // return $id;
        $posts = [
            [
            'id'=>1,
            'title'=>"Single Post title",
            'img'=>"nkar.jpg"
            ],
            [
                'id'=>2,
                'title'=>"Single Post title",
                'img'=> "nkar1.jpg"
            ]
        ];
        $post = $posts[$id-1];
        return view('posts.single',compact('post'));
        // return view('posts.single')->with('post',$post);
        // return view('posts.single',['post'=>$post]);
    }
}
// with - erb mi popoxakan en stanum
