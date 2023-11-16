@extends('fragmentAll.layout')

@section('Content')

    <h1>Create Post</h1>
    @include('fragmentAll._errors')
    <form action={{ route('category.store') }} method="post">
        @include('dashboard.category._form')
    </form>

@endsection
