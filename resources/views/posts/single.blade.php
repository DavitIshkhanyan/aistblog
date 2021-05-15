{{-- <h2>Post {{$post_id}} </h2> --}}

@extends('layouts.app')
@section('content')
    <div class="post_item">
{{--    <h1>{{ $post['title'] }}</h1>--}}
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->body }}</p>
{{--    <img src="{{ url('/storage/app/public/'.$post['image']) }}" alt="" width="300">--}}
    <img src="storage/{{$post -> image}}" width="200px" height="200px">
    </div>
{{--     {{ print_r($post) }}--}}
@endsection
