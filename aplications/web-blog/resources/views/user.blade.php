{{-- @dd($post) --}}
@extends('layouts.main')

@section('container')
    <h1>Ini data penulis {{ $title }}</h1>
    @forelse ($posts as $item)
        <article>
            <ul>
                <li><a class='text-decoration-none' href="/posts/{{ $item->slug }}">{{ $item->name }}</a></li>
            </ul>    
        </article>
    @empty
        <p>Data belum ada</p>    
    @endforelse 

    <a class='text-decoration-none' href="/blog">Back To Posts</a>
@endsection