<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pessoas</title>
</head>
<body style="font-size: 12px">
    <h2 style="text-align: center">Dados Pessoais</h2>
    <div>
        <h3>Nome: {{ $pessoa->nome }}</h3>
        <h3>CPF: {{ $pessoa->cpf }}</h3>
        <h3>Numero do SUS: {{ $pessoa->num_sus }}</h3>
        <h3>Data de Nascimento: {{ $pessoa->data_nascimento }}</h3>
        <h3>Nome da Mãe: {{ $pessoa->nome_mae }}</h3>
        <h3>Sexo: {{ $pessoa->sexo }}</h3>
        <h3>Estado Civil: {{ $pessoa->estado_civil }}</h3>
        <h3>Escolaridade: {{ $pessoa->escolaridade }}</h3>
        <h3>Cor: {{ $pessoa->raca_cor }}</h3>
        <h3>Plano de Saúde: {{ $pessoa->plano_saude }}</h3>
        <h3>CEP: {{ $pessoa->endereco['cep'] }}</h3>
        <h3>Logradouro: {{ $pessoa->endereco['street'] }}</h3></h3>
        <h3>Bairro: {{ $pessoa->endereco['district'] }}</h3>
        <h3>Numero: {{ $pessoa->endereco['number'] }}</h3>
        <h3>Complemento: {{ $pessoa->endereco['complement'] }}</h3>
        <h3>Cidade: {{ $pessoa->endereco['city'] }}</h3>
        <h3>Estado: {{ $pessoa->endereco['state'] }}</h3>
        <h3>País: {{ $pessoa->endereco['country'] }}</h3>
        <hr>
        <h2>Vacinas Tomadas</h2>
        <table border="1" style="width: 100%">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Dose</th>
                    <th>Data de aplicação</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pessoa_vacinas as $pessoa_vacina)
                    <tr>
                        <td>{{ $pessoa_vacina->vacina->nome }}</td>
                        <td>{{ $pessoa_vacina->dose }}</td>
                        <td>{{ $pessoa_vacina->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
