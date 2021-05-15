@extends('layouts.app')
@section('content')
    <form action="/posts/{{$post->id}}" method="post">
        @csrf
        @method("PUT")
        <label for="fname">Title</label>
        <input type="text" id="fname" name="title" placeholder="Enter Title.." value={{$post->title}}>
        @if($errors->first('title'))
            <div class="alert-danger">{{$errors->first('title')}}</div>
        @endif
        <label for="subject">Body</label>
        <textarea id="subject" name="body" placeholder="Enter text.." style="height:200px" value={{$post->body}}>{{$post->body}}</textarea>
        @if($errors->first('body'))
            <div class="alert-danger">{{$errors->first('body')}}</div>
        @endif
        <label for="image">Image</label>
        <input type="file" id="image" name="image" class="form-control">
        <input type="submit" value="Submit">
    </form>
@endsection
