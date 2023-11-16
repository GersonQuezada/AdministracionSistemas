@extends('fragmentAll.layout')
@section('Content')

    <h1>Actualizar Categoria : {{ $category ->title}}</h1>
    @include('fragmentAll._errors')
    <form action={{ route('category.update',$category->id) }} method="post" >
        @method("PUT")
        @include('dashboard.category._form')

    </form>

@endsection
