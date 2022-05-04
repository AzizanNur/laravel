@extends('layouts.main')

@section('container')

<h1>{{ $title }}</h1>

@if ($posts->count())
  <div class="card mb-3">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
@else
  <p class="text-center fs-4">No Post Found.</p>
@endif


@foreach ($posts as $item)

<article class="mb-5 mt-4 border-bottom pb-4">
    <h2>
        <a class='text-decoration-none' href="/posts/{{ $item->slug }}">{{ $item->title }}</a>
    </h2>
    <p>By. <a class='text-decoration-none' href="/user/{{ $item->user->slug }}">{{ $item->user->name }}</a> in <a class='text-decoration-none' href="/categories/{{ $item->category->slug }}">{{ $item->category->name }}</a></p>
    <p>{{ $item->excerpt }}</p>
    <a class='text-decoration-none' href="/posts/{{ $item->slug }}">Read More...</a>
</article>
@endforeach
    
@endsection