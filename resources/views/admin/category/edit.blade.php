@extends('adminlte::page')

@section('title', "Editar a categoria {$category->name}")

@section('content_header')
    <h1>Editar a categoria {{ $category->name }}</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('category.update', $category->id) }}" class="form" method="POST" >
                @csrf
                @method('PUT')

                @include('admin.category._partials.form')
            </form>
        </div>
    </div>
@endsection