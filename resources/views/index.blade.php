@extends('app')

@section('titulo', 'Pagina inicial')


@section('conteudo')

<h1 class="mt-5">Cadastros</h1>

    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">
    Inserir pessoa
    </button>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create-empresa">
    Inserir empresa
    </button>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create-vacina">
    Inserir vacina
    </button>

    <div class="d-flex justify-content-around mt-5">
        <div class="card d-flex align-items-center" style="width: 18rem;">
            <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title">Pessoas cadastradas</h5>
                <p class="card-text "> {{ isset($pessoas[0]->contador_pessoas) ? $pessoas[0]->contador_pessoas : 0 }} </p>
            </div>
        </div>

        <div class="card d-flex align-items-center" style="width: 18rem;">
            <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title">Empresas cadastradas</h5>
                <p class="card-text "> {{ isset($empresas[0]->contador_empresas) ? $empresas[0]->contador_empresas : 0 }} </p>
            </div>
        </div>

        <div class="card d-flex align-items-center" style="width: 18rem;">
            <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title">Vacinas cadastradas</h5>
                <p class="card-text "> {{ isset($vacinas[0]->contador_vacinas) ? $vacinas[0]->contador_vacinas : 0 }} </p>
            </div>
        </div>
    </div>


    <!-- Modal Inserir-->
    @include('pessoa.create')
    @include('empresa.create')
    @include('vacina.create')

    <script>
        function limitarCNPJ(input) {
            if (input.value.length > 14) {
                input.value = input.value.slice(0, 14);
            }
        }
        function limitarCPF(input) {
            if (input.value.length > 11) {
                input.value = input.value.slice(0, 11);
            }
        }
        function limitarTELEFONE(input) {
            if (input.value.length > 11) {
                input.value = input.value.slice(0, 11);
            }
        }
        function limitarCEP(input) {
            if (input.value.length > 8) {
                input.value = input.value.slice(0, 8);
            }
        }

        </script>

@endsection
