@extends('layouts.default')


@section('content')
    <h1>Atores</h1>
    <table class="table table-stripe table-bordered table-hover">
        <thead>
            <th>Nome</th>
            <th>Data de Nascimento</th>
            <th>Nacionalidade</th>
            <th>Início Atividades</th>
            <th>Ações</th>

        </thead>
        <tbody>
            @foreach ($atores as $ator)
                <tr>
                    <td>{{ $ator->nome }}</td>
                    <td>{{ Carbon\Carbon::parse($ator->dt_nascimento)->format('d/m/Y') }}</td>
                    <td>{{ isset($ator->nacionalidade->descricao) ? $ator->nacionalidade->descricao : 'Nacionalidade não informada' }}
                    </td>
                    <td>{{ Carbon\Carbon::parse($ator->inicio_atividades)->format('d/m/Y') }}</td>
                    <td><a href="{{ route('atores.edit', ['id' => $ator->id]) }}" class="btn-sm btn-success">Editar</a>
                        <a href="#" onclick="return ConfirmaExclusao({{ $ator->id }})"
                            class="btn-sm btn-danger">Remover</a>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $atores->links('pagination::bootstrap-4') }}
    <a href="{{ route('atores.create', []) }}" class="btn btn-info">Adicionar</a>
@stop

@section('table-delete')
    "atores"
@endsection
