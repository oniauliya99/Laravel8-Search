{{-- @extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $post['title'] }}</h2>
        <h5>{{ $post['author'] }}</h5>
        <p>{{ $post['body'] }}</p>
    </article>
    <a href="/blog">Back to Blog</a>
@endsection --}}

@extends('layouts.main')


@section('container')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="mb-5">{{ $title }}</h1>
                <article>
                    <h2 class="mt-3">{{ $blog->title }}</h2>
                    <p><a href="" class="text-decoration-none text-black"> {{ $blog->user->name }}</a> in
                        <a href="/categories/{{ $blog->category->slug }}"
                            class="text-decoration-none">{{ $blog->category->name }}</a>
                    </p>
                    <p>{!! $blog->body !!}</p>
                </article>
                <a href="/blog">Back to Page</a>
            </div>
        </div>
    </div>
@endsection
