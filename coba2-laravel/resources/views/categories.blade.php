@extends('layouts.main')

@section('container')
    <h1>{{ $title }}</h1>
    @foreach ($category as $c)
        <article>
            <h2><a href="/categories/{{ $c->slug }}">{{ $c->name }}</a></h2>
        </article>
    @endforeach


@endsection
