@extends('dashboard.layouts.main')

@section('container')
   <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Post</h1>
  </div> 

  <div class="col-lg-8"> 
      <form method="POST" action="/dashboard/tags/{{ $tag->slug }}" class="mb-5" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ old('name', $tag->name) }}">                  
          @error('name')
            <div class="invalid-feedback">
              {{ $message }}
            </div>  
          @enderror
        </div>
                 
        <div class="mb-3">
          <label for="slug" class="form-label">Slug</label>
          <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug', $tag->slug) }}">
          @error('slug')
            <div class="invalid-feedback">
              {{ $message }}
            </div>  
          @enderror          
        </div>
        
        <button type="submit" class="btn btn-primary">Update Post</button>
      </form>
  </div>

  <script>
      const name = document.querySelector('#name');
      const slug  = document.querySelector('#slug');

      name.addEventListener('change', function(){
          fetch('/dashboard/posts/checkSlug?title='+name.value)
          .then(response => response.json())
          .then(data => {
            document.querySelector('#slug').value = data.slug;
          })
      });
      
  </script>
@endsection