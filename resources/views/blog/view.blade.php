@extends('layouts.app')
@section('content')
<div class="container">
    <h2>{{ $blog->title }}</h2>
    <p>{{ $blog->content }}</p>
    

    <a class="btn btn-primary" href="{{route('editBlog', ['id' => $blog->id])}}">Edit</a>
   

@endsection