@extends('layouts.app')
@section('content')
    <form action="/posts" method="post" enctype="multipart/form-data">
        @csrf
        <label for="fname">Title</label>
        <input type="text" id="fname" name="title" placeholder="Enter Title..">
        <label for="subject">Body</label>
        <textarea id="subject" name="body" placeholder="Enter text.." style="height:200px"></textarea>
        <label for="image">Image</label>
        <input type="file" id="image" name="image" class="form-control">
        <input type="submit" value="Submit">
    </form>
@endsection
