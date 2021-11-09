@extends('adminlte::page')

@section('title', "Detalhes do usuário {$user->name}")

@section('content_header')
    <h1>Detalhes do usuário <b>{{ $user->name }}</b></h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <ul>
                <li>
                    <strong>Nome: </strong> {{ $user->name }}
                </li>
                <li>
                    <strong>E-mail: </strong> {{ $user->email }}
                </li>
                <li>
                    <strong>Perfil: </strong> {{ $user->getRoleNames()[0] }}
                </li>

                <li>
                    <strong>Cidade: </strong> {{ $user->city }}
                </li>

                <li>
                    <strong>Estado: </strong> {{ $user->state }}
                </li>

                <li>
                    <strong>Telefone: </strong> {{ $user->phone }}
                </li>
                <li>
                    <strong>Instagram: </strong> {{ $user->instagram }}
                </li>
            </ul>

            @include('admin.includes.alerts')

            <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> DELETAR O USUÁRIO {{ $user->name }}</button>
            </form>
        </div>
    </div>
@endsection