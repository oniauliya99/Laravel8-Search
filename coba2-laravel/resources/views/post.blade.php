@extends('layouts.main')

@section('container')
    <h1 class="mb-5">{{ $title }}</h1>
    <form action="/blog">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search" name="search"
                value="{{ request('search') }}">
            <button class="btn btn-success" type="submit">Search</button>
        </div>
    </form>
    @if ($post->count())
        <div class="card mb-3">
            <img src="https://source.unsplash.com/1200x400?{{ $post[0]->category->name }}" class="card-img-top"
                alt="{{ $post[0]->category->name }}">
            <div class="card-body text-center">
                <h5 class="card-title">{{ $post[0]->title }}</h5>
                <p>
                    <small class="text-muted">
                        <a href="/post/{{ $post[0]->user->username }}" class="text-decoration-none text-black">
                            {{ $post[0]->user->name }}</a> in
                        <a href="/categories/{{ $post[0]->category->slug }}"
                            class="text-decoration-none">{{ $post[0]->category->name }}</a>
                        {{ $post[0]->created_at->diffForHumans() }}
                    </small>
                </p>
                <p class="card-text">
                    {{ $post[0]->excerpt }}
                </p>
                <a class="text-decoration-none btn btn-primary" href="/blog/{{ $post[0]->slug }}">Go Somewhere</a>
            </div>
        </div>

        <div class="container">
            <div class="row">
                @foreach ($post->skip(1) as $p)
                    <div class="col-md-4 mb-5">
                        <div class="card">
                            <div class="position-absolute bg-dark px-3 py-2 text-white"><a
                                    class="text-decoration-none text-white"
                                    href="/categories/{{ $p->category->slug }}">{{ $p->category->name }}</a></div>
                            <img src="https://source.unsplash.com/500x400?{{ $p->category->name }}" class="card-img-top"
                                alt="{{ $p->category->name }}">
                            <div class="card-body">
                                <h5 class="card-title"><a class="text-decoration-none text-black" href="/blog/{{ $p->slug }}">
                                        {{ $p->title }}</a></h5>
                                <p class="card-text">{{ $p->excerpt }}</p>
                                <p>
                                    <small class="text-muted">
                                        <a href="/post/{{ $p->user->username }}" class="text-decoration-none text-black">
                                            {{ $p->user->name }}</a>
                                        {{ $p->created_at->diffForHumans() }}
                                    </small>
                                </p>
                                <a href="/blog/{{ $p->slug }}" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    @else
        <p class="text-center fs-4">Produk Tidak Ditemukan</p>

    @endif

@endsection
