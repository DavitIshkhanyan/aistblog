{{-- <h2>Post {{$post_id}} </h2> --}}

@extends('layouts.app')
@section('content')
{{--    <h1>{{ $post['title'] }}</h1>--}}
    <h1>{{ $post->title }}</h1>
    <img src="{{ url('/storage/'.$post['img']) }}" alt="" width="300">
    {{-- {{ print_r($post) }} --}}
@endsection
