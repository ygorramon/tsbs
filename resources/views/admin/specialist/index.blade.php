@extends('adminlte::page')

@section('title', 'Especialistas')

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="{{ route('specialist.index') }}" class="active">Especialistas</a></li>
    </ol>

    <h1>Especialistas <a href="{{ route('specialist.create') }}" class="btn btn-dark">ADD</a></h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            
        </div>
        <div class="card-body">
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>Nome</th>
                        
                        <th width="270">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($specialists as $specialist)
                        <tr>
                            <td>{{ $specialist->name }}</td>
                            <td style="width=10px;">
                                <a href="{{ route('specialist.edit', $specialist->id) }}" class="btn btn-info">Edit</a>
                                <a href="{{ route('specialist.show', $specialist->id) }}" class="btn btn-warning">VER</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            @if (isset($filters))
                {!! $specialists->appends($filters)->links() !!}
            @else
                {!! $specialists->links() !!}
            @endif
        </div>
    </div>
@stop
