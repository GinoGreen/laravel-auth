@extends('layouts.admin')

@section('content')
   <div class="container">
      <h1>Crea Post</h1>
      <form action="{{ route('admin.post.store') }}" method="POST">
         @csrf
         @method('POST')
         <div class="mb-3 form-check">
            <label class="form-check-label" for="title">Titolo</label>
            <input 
               type="text" 
               placeholder="Inserisci il titolo del post"
               class="form-control"
               id="title"
               name="title"
            >
         </div>
         <div class="mb-3 form-check">
            <label class="form-check-label" for="content">Contenuto</label>
            <textarea
               name="content"
               cols="30"
               rows="10"
               placeholder="Inserisci il contentuto del post"
               class="form-control"
               id="content"
            ></textarea>
         </div>
         <button type="submit" class="btn btn-primary">Submit</button>
         <button type="reset" class="btn btn-secondary">Reset</button>
      </form>
   </div>
@endsection

@section('title')
   Crea Post
@endsection