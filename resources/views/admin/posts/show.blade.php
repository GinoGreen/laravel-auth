@extends('layouts.admin')

@section('content')
   <div class="container">
      <h1>Post</h1>
      <div class="card border-info mb-3" style="max-width: 18rem;">
         <div class="card-header"><button class="btn btn-success"><a class="text-white" href="#">Edit</a></button></div>
         <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <p class="card-text">{{ $post->content }}</p>
         </div>
      </div>
   </div>
@endsection

@section('title')
   {{ $post->title }}
@endsection