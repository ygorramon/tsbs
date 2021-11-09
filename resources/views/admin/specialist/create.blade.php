@extends('adminlte::page')

@section('title', 'Cadastrar Novo Especialista')

@section('content_header')
    <h1>Cadastrar Novo Especialista</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('specialist.store') }}" class="form" method="POST" enctype="multipart/form-data">
                @csrf

                @include('admin.specialist._partials.form')
            </form>
        </div>
    </div>
@endsection
