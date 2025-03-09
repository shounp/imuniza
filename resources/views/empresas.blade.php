@extends('app')

@section('titulo', 'Pagina empresas')

@section('conteudo')

<h1 class="mt-5">Lista De empresas</h1>
<div>
    <a href="{{ route('relatorio.empresas') }}" class="btn btn-warning text-white">Gerar Relatórios</a>
</div>
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Cnpj</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($empresas as $empresa)
            <tr class="">
                <th scope="row">{{ $empresa->id }}</th>
                <td>{{ $empresa->nome_empresa }}</td>
                <td>{{ $empresa->cnpj }}</td>
                <td>
                    <button type="button" class="btn btn-info text-white" data-bs-toggle="modal" data-bs-target="#info-{{ $empresa->id }}">info</button>
                    @include('empresa.info')
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit-{{ $empresa->id }}">Editar</button>
                    @include('empresa.update')
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete-{{ $empresa->id }}">Apagar</button>
                    @include('empresa.delete')
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