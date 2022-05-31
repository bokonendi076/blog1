@extends('layouts.app')
@section('content')
<div class="container">
    
<table class="table">
    <thead>
      <tr>
        <th scope="col">blog title</th>
        <th scope="col">Date</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
        @foreach ($blogs as $blog)
      <tr>
        <td><a href="{{route('viewBlog', $blog)}}">{{$blog->title}}</a></td>
        <td>{{$blog->created_at}}</td>
        <td><a class="btn btn-primary" href="{{route('deleteBlog', ['id' => $blog->id])}}">Delete</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <br><br>
  <a class="btn btn-primary" href="{{route('createBlog', ['id' => $blog->id])}}">Create Blog</a>
@endsection
</div>
    