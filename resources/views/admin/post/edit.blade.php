@extends('adminlte::page')

@section('title', "Editar o post {$post->name}")

@section('content_header')
    <h1>Editar o post {{ $post->title }}</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('post.update', $post->id) }}" class="form" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                @include('admin.post._partials.form')
            </form>
        </div>
    </div>
@endsection