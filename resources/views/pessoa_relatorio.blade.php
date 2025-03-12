<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Relatório de Pessoas</title>
</head>
<body style="font-size: 12px">
    <h2 style="text-align: center">Relatório de Pessoas Cadastradas</h2>
    <table style="border-collapse: collapse; width: 100%; border: 1px solid black;">
        <thead>
            <tr style="border: 1px solid black; background-color: #9494949a;">
                <th style="border: 1px solid black;">ID</th>
                <th style="border: 1px solid black;">Nome</th>
                <th style="border: 1px solid black;">CPF</th>
                <th style="border: 1px solid black;">Data de Nascimento</th>
                <th style="border: 1px solid black;">CEP</th>
                <th style="border: 1px solid black;">Cidade</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($pessoas as $pessoa)
                <tr style="text-align: center">
                    <th style="border: 1px solid #9494949a; border-top: none;">{{ $pessoa->cpf }}</th>
                    <td style="border: 1px solid #9494949a; border-top: none;">{{ $pessoa->nome }}</td>
                    <td style="border: 1px solid #9494949a; border-top: none;">{{ $pessoa->cpf }}</td>
                    <td style="border: 1px solid #9494949a; border-top: none;">{{ $pessoa->data_nascimento }}</td>
                    <td style="border: 1px solid #9494949a; border-top: none;">{{ $pessoa->endereco['cep'] }}</td>
                    <td style="border: 1px solid #9494949a; border-top: none;">{{ $pessoa->endereco['city'] }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">Nenhum registro cadastrado</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    <p style="font-size: 10px; text-align: center; margin-top: 20px;">Dados sensíveis foram tratados em conformidade com a LGPD.</p>
</body>
</html>