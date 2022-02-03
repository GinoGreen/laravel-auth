@extends('layouts.admin')

@section('content')
   <div class="container">
      <div class="row">
         <h1>Elenco Posts</h1>
         <table class="table">
            <thead>
               <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Titolo</th>
                  <th scope="col">Azioni</th>
               </tr>
            </thead>
            <tbody>
               @foreach ($posts as $post)
                  <tr>
                     <th scope="row">{{ $post->id }}</th>
                     <td>{{ $post->title }}</td>
                     <td>
                        <button class="btn btn-primary"><a class="text-dark" href="{{ route('admin.post.show', $post) }}">Show</a></button>
                        <button class="btn btn-success"><a class="text-white" href="{{ route('admin.post.edit', $post) }}">Edit</a></button>
                        <button class="btn btn-danger"></button>
                     </td>
                  </tr>
               @endforeach
            </tbody>
         </table>
         {{ $posts->links() }}
      </div>
   </div>
@endsection

@section('title')
   Elenco post
@endsection