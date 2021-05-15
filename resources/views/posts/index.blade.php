<?php
//echo "Posts page"; ?>
@extends('layouts.app')
@section('content')
@foreach($posts as $post)
    <div class="post_item">
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->body }}</p>
        <img src="storage/posts/{{$post -> image}}" width="200px" height="200px">
        {{-- <a href="/posts/{{$post->id}}/edit">Edit</a>
        <form action="/posts/{{$post->id}}" method="post">
            @csrf
            @method("DELETE")
            <input type="submit" value="delete">
        </form> --}}
    </div>
@endforeach
@endsection
