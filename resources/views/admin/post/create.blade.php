@extends('adminlte::page')
@section('css')
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">@endsection
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
