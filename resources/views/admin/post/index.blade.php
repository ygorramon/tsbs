@extends('adminlte::page')

@section('title', 'Posts')

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="{{ route('post.index') }}" class="active">Posts</a></li>
    </ol>

    <h1>Posts <a href="{{ route('post.create') }}" class="btn btn-dark">ADD</a></h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            
        </div>
        <div class="card-body">
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>Título</th>
                        <th>Autor</th>

                        <th width="270">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->author->name }}</td>

                            <td style="width=10px;">
                                <a href="{{ route('post.edit', $post->id) }}" class="btn btn-info">Edit</a>
                                <a href="{{ route('post.show', $post->id) }}" class="btn btn-warning">VER</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            @if (isset($filters))
                {!! $posts->appends($filters)->links() !!}
            @else
                {!! $posts->links() !!}
            @endif
        </div>
    </div>
@stop
