{{-- sama dengan vardump --}}
{{-- @dd($post) --}}

@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h2 class="mb-3">{{ $post->title }}</h2>

            {{-- untuk menampilkan nama relasi table category--}}
            <p>By. <a href="/authors/{{ $post->author->username }}"> {{ $post->author->name }} </a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>

            @if($post->image)
            <div style="max-height: 350px; overflow:hidden">
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
            </div>
            @else
                <img src="http://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
            @endif

            <article class="my-3 fs-5">
                {{-- untuk menampilkan data tanpa html special char --}}
                {!! $post->body !!}
            </article>

            <a href="/blog" class="d-block">Back to Posts</a>
        </div>
    </div>
</div>



@endsection