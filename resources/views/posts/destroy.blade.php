@extends('layouts.app')
@section('content')
    <form action="/posts/{{$post->id}}" method="post">
        @csrf
        @method("DELETE")


    </form>
@endsection
