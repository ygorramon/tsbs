@extends('adminlte::page')

@section('title', 'Cadastrar Novo Autor')

@section('content_header')
    <h1>Cadastrar Novo Autor</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('author.store') }}" class="form" method="POST" enctype="multipart/form-data">
                @csrf

                @include('admin.author._partials.form')
            </form>
        </div>
    </div>
@endsection
