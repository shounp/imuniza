<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pessoas</title>
</head>
<body style="font-size: 12px">
    <h2 style="text-align: center">Pessoas</h2>
    <table style="border-collapse: collapse; width: 100%; border: 1px solid black;">
        <thead>
            <tr style="border: 1px solid black; background-color: #9494949a;">
                <th style="border: 1px solid black;">ID</th>
                <th style="border: 1px solid black;">Nome</th>
                <th style="border: 1px solid black;">Cpf</th>
                <th style="border: 1px solid black;">Data de nascimento</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($pessoas as $pessoa)
                <tr style="text-align: center">
                    <th style="border: 1px solid #9494949a; border-top: none;">{{ $pessoa->cpf }}</th>
                    <td style="border: 1px solid #9494949a; border-top: none;">{{ $pessoa->nome }}</td>
                    <td style="border: 1px solid #9494949a; border-top: none;">{{ $pessoa->cpf }}</td>
                    <td style="border: 1px solid #9494949a; border-top: none;">{{ $pessoa->data_nascimento }}</td>
                </tr>
            @empty
                <tr>
                    <th scope="row">1</th>
                    <td colspan="4">Nenhum registro cadastrado</td>
                </tr>
            @endforelse
        </tbody>
        </table>
</body>
</html>
