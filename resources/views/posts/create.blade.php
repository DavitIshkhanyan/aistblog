@extends('layouts.app')
@section('content')
    <form action="/posts" method="post">
        @csrf
        <label for="fname">Title</label>
        <input type="text" id="fname" name="title" placeholder="Enter Title..">
        <label for="subject">Body</label>
        <textarea id="subject" name="body" placeholder="Enter text.." style="height:200px"></textarea>
        <input type="submit" value="Submit">
    </form>
@endsection
