@extends('adminlte::page')

@section('title', "Editar o autor {$author->name}")

@section('content_header')
    <h1>Editar o usuário {{ $author->name }}</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('author.update', $author->id) }}" class="form" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                @include('admin.author._partials.form')
            </form>
        </div>
    </div>
@endsection