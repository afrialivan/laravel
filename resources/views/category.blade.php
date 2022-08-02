{{-- sama seperti vardump --}}
{{-- @dd($posts) --}}

@extends('layouts.main')

@section('container')

<div class="row justify-content-center mb-3">
  <div class="col-md-6">
      <form action="/blog">
          <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
              <button class="btn btn-danger" type="submit">Search</button>
          </div>
      </form>
  </div>
</div>

<div class="container">
  <div class="row">
    @foreach ($posts as $post)
    <div class="col-md-4 my-2">
      <div class="card">

        <div class="position-absolute bg-dark px-3 py-2 text-white" style="background-color: rgba(0, 0, 0, 0.205)"><a href="/categories/{{ $post->category->slug }}" class="text-decoration-none text-white">{{ $post->category->name }}</a></div>

        <img src="http://source.unsplash.com/500x500?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">

        <div class="card-body">
          <h5 class="card-title">{{ $post->title }}</h5>

          <p><small>By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> {{ $post->created_at->diffForHumans() }}</small></p>

          <p class="card-text">{{ $post->excerpt }}</p>
          <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read more</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>


@endsection