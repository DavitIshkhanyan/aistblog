<?php
//echo "Posts page"; ?>
@extends('layouts.app')
@section('content')
@foreach($posts as $post)
    <div class="post_item">
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->body }}</p>
    </div>
@endforeach
@endsection
