@extends('adminlte::page')

@section('title', "Editar o especialista {$specialist->name}")

@section('content_header')
    <h1>Editar o usuário {{ $specialist->name }}</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('specialist.update', $specialist->id) }}" class="form" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                @include('admin.specialist._partials.form')
            </form>
        </div>
    </div>
@endsection