@extends('adminlte::page')

@section('title', 'Cadastrar Nova Categoria de Especialista')

@section('content_header')
    <h1>Cadastrar Nova Categoria</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('category.store') }}" class="form" method="POST">
                @csrf

                @include('admin.category._partials.form')
            </form>
        </div>
    </div>
@endsection
