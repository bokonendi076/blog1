@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Welkom {{ Auth::user()->name }}</h1> 
    <br><br>
    <p>Bedankt voor het nakijken van mijn blogsysteem. <a href="{{route('listBlogs')}}">Zie alle Blogs</a></p>

   
</div>
@endsection