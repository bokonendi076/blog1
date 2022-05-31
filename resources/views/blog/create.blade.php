@extends('layouts.app')
@section('content')
<div class="container">
    <form action="{{ route('processCreateBlog') }}" method="POST">
        @csrf
        <input type="text" class="form-control" name='blog_title'  placeholder="Blog Title"><br>
        <textarea type="text" class="form-control" name="blog_content" placeholder="Blog Content" rows="4"></textarea><br>
        <input type="submit" class="btn btn-primary" value="Submit">
    </form>
</div>
   
@endsection