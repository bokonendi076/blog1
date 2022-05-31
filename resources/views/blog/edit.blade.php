@extends('layouts.app')
@section('content')
<div class="container">
    <form action="{{ route('processEditBlog', $blog->id) }}" method="POST">
        @csrf
        <input type="text" class="form-control" name='blog_title' id="blog_title" placeholder="Blog Title" value="{{$blog->title}}"><br>
        <textarea type="text" class="form-control" name="blog_content" id="blog_content" placeholder="Blog Content" rows="4" value="{{$blog->content}}"></textarea><br>
        <input type="submit" class="btn btn-primary" value="Submit">
    </form>
</div>
   
@endsection