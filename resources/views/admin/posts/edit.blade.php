@extends('layouts.admin')

@section('content')
   <div class="container">
      @if ($errors->any())
      <div class="alert alert-danger" role="alert">
         @foreach ($errors->all()
          as $error)
            <li>{{ $error }}</li>
         @endforeach
      </div>
      @endif
      <h1>Crea Post</h1>
      <form action="{{ route('admin.post.update', $post) }}" method="POST">
         @csrf
         @method('PUT')
         <div class="mb-3 form-check">
            <label class="form-check-label" for="title">Titolo</label>
            <input 
               type="text" 
               placeholder="Inserisci il titolo del post"
               id="title"
               name="title"
               value="{{ old('title', $post->title) }}"
               class="form-control
                  @error('title')
                     
                  @enderror
               "
            >
         </div>
         <div class="mb-3 form-check">
            <label class="form-check-label" for="content">Contenuto</label>
            <textarea
               name="content"
               cols="30"
               rows="10"
               placeholder="Inserisci il contentuto del post"
               id="content"
               class="form-control
                  @error('')
                     
                  @enderror
               "
            >{{ old('content', $post->content) }}</textarea>
         </div>
         <button type="submit" class="btn btn-primary">Submit</button>
      </form>
   </div>
@endsection

@section('title')
   Crea Post
@endsection