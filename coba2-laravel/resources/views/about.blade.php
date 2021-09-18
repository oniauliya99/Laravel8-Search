@extends('layouts.main')

@section('container')
    <h2>{{ $title }}</h2>
    <h5>{{ $name }}</h5>
    <h5>{{ $email }}</h5>
    <img src="img/{{ $image }}" alt="{{ $name }}" width="200">

@endsection
