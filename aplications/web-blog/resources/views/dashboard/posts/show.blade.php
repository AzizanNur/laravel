@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h1>{{ $post->title }}</h1>
                <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back To All My posts</a>
                <a href="" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
                <a href="" class="btn btn-danger"><span data-feather="x-circle"></span> Delete</a>
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top img-fluid mt-4" alt="">
                
                <article class="my-3 fs-5">
                    {!! $post->body !!} <!-- this not doing excaping htlm sintax / or this exclude from template engine blade -->
                </article>            
        </div>
    </div>
</div>
@endsection