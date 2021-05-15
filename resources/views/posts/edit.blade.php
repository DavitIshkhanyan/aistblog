@extends('layouts.app')
@section('content')
    <form action="/posts/{{$post->id}}" method="post">
        @csrf
        @method("PUT")
        <label for="fname">Title</label>
        <input type="text" id="fname" name="title" placeholder="Enter Title.." value={{$post->title}}>
        <label for="subject">Body</label>
        <textarea id="subject" name="body" placeholder="Enter text.." style="height:200px" value={{$post->body}}>{{$post->body}}</textarea>
        <input type="submit" value="Submit">
    </form>
@endsection
