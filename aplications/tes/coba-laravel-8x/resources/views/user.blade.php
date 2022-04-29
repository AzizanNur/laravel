{{-- @dd($post) --}}
@extends('layouts.main')

@section('container')
    <h1>Ini data <a href="/users/">penulis</a> {{ $title }}</h1>
    @forelse ($posts as $item)
        <article>
            <ul>
                <li><a class='text-decoration-none' href="/posts/{{ $item->slug }}">{{ $item->title }}</a></li>
            </ul>    
        </article>
    @empty
        <p>Data belum ada</p>    
    @endforelse 

    <a class='text-decoration-none' href="/blog">Back To Posts</a>
@endsection