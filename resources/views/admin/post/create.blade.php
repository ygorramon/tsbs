@extends('adminlte::page')

@section('title', 'Cadastrar Novo Post')

@section('content_header')
    <h1>Cadastrar Novo Post</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('post.store') }}" class="form" method="POST" enctype="multipart/form-data">
                @csrf

                @include('admin.post._partials.form')
            </form>
        </div>
    </div>
@endsection
