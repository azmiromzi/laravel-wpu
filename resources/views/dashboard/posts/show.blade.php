@extends('dashboard.layouts.main')


@section('container')

<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h2>{{ $post->title }}</h2>
            <a href="/dashboard/posts" class="btn btn-success my-3 ">
                <span data-feather="arrow-left"></span>
                 Back to my post
            </a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning my-3">
                <span data-feather="edit"></span>
                 Edit
            </a>

            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger my-3" onclick="return confirm('are you sure?')"><span data-feather="x-circle"></span>Delete</button>
            </form>
            @if ($post->image)
            <div style="max-height: 350px; overflow:hidden">

                <img src="{{ asset('storage/' . $post->image) }}" alt="$post->category->name" width="1200" height="300" class="img-fluid">
            </div>
            @else
            <img src="https://images.unsplash.com/5/unsplash-kitsune-4.jpg?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjEyMDd9&s=dd060fe209b4a56733a1dcc9b5aea53a" alt="$post->category->name" width="1200" height="300" class="img-fluid">
            @endif
            <article class="my-3 fs-5">{!! $post->body !!}</article>


        </div>
    </div>
</div>
@endsection
