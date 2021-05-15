<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;
use App\Services\ImageService;
//use App\Http\Controllers\ImageService;
//use App\Http\Services\ImageService;


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
// with - erb mi popoxakan en stanum
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

    public function store(Request $request){
        $post = new Post();
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->image = $request->input('image');
//        $post->title='Hello';
//        $post->image = $request->file('image')->storeAs(
//         'posts', $post->id.$request->file('image')->getClientOriginalName()
//        );
        if($request->file('image')){
            (new ImageService())->saveImage($request->file('image'), $post, 'posts');
        }
        $post->save();
//        $posts = Post::all();
//        return view('posts.index',['posts'=>$posts,'success'=>'Succesufully added']);
       return redirect()->route('posts');
    }

    public function edit($id){
//        dd($id);
        $post=Post::findOrFail($id);
        return view('posts.edit',['post'=>$post]);
    }
    public function update(Request $request, $id){
        $post=Post::findOrFail($id);
//        $data = $request->all();
        // $data = $request->except(['_token','_method']);
        //$data = $request->except(['_token','_method']);
        //Post::updateOrCreate($data);
        $post-> update([
            'title' => $request->input('title'),
            'body' => $request->input('body')
        ]);
        return redirect()->route('admin');
//        return redirect('/posts');
    }

    public function destroy($id)
    {
//        $post = posts::find($id);
//        $post->delete();
        Post::destroy($id);
        return redirect()->route('admin');
    }

}

