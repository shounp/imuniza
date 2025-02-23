@extends('app')

@section('titulo', 'Pagina pessoas')


@section('conteudo')

<h1 class="mt-5">Lista De pessoas</h1>
<div>
    <a href="{{ route('gerador.pdf') }}" class="btn btn-warning text-white">gerar pdf</a>
</div>
<table class="table">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Nome</th>
        <th scope="col">Cpf</th>
        <th scope="col">Data de nascimento</th>
        <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($pessoas as $pessoa)
            <tr class="">
                <th scope="row">{{ $pessoa->id }}</th>
                <td>{{ $pessoa->nome }}</td>
                <td>{{ $pessoa->cpf }}</td>
                <td>{{ $pessoa->data_nascimento }}</td>
                <td>
                    <button type="button" class="btn btn-success text-white" data-bs-toggle="modal" data-bs-target="#addvac-{{ $pessoa->id }}">Adicionar Vacina</button>
                    @include('pessoa.vacina')

                    <button type="button" class="btn btn-info text-white" data-bs-toggle="modal" data-bs-target="#info-{{ $pessoa->id }}">info</button>
                    @include('pessoa.info')

                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit-{{ $pessoa->id }}">Editar</button>
                    @include('pessoa.update')

                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete-{{ $pessoa->id }}">Apagar</button>
                    @include('pessoa.delete')

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
