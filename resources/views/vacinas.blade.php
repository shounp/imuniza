@extends('app')

@section('titulo', 'Pagina vacinas')


@section('conteudo')

<h1 class="mt-5">Lista De vacinas</h1>
<table class="table">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Nome</th>
        <th scope="col">Doses</th>
        <th scope="col">fabricante</th>
        <th scope="col">validade</th>
        <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($vacinas as $vacina)
            <tr class="">
                <th scope="row">{{ $vacina->id }}</th>
                <td>{{ $vacina->nome }}</td>
                <td>{{ $vacina->doses }}</td>
                @foreach ($fabricantes as $fabricante)
                    @if ($fabricante->id == $vacina->fabricante_id)
                        <td>{{ $fabricante->nome_empresa}}</td>
                    @endif
                @endforeach
                <td>{{ $vacina->validade }}</td>
                <td>
                    <button type="button" class="btn btn-info text-white" data-bs-toggle="modal" data-bs-target="#info-{{ $vacina->id }}">info</button>
                    @include('vacina.info')

                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit-{{ $vacina->id }}">Editar</button>
                    @include('vacina.update')

                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete-{{ $vacina->id }}">Apagar</button>
                    @include('vacina.delete')

                </td>
            </tr>
        @empty
            <tr>
                <th scope="row">1</th>
                <td>Nenhum registro cadastrado</td>
                <td></td>
            </tr>
        @endforelse
    </tbody>
    </table>

@endsection
