<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Relatório de Empresas</title>
</head>
<body style="font-size: 12px">
    <h2 style="text-align: center">Relatório de Empresas Cadastradas</h2>
    <table style="border-collapse: collapse; width: 100%; border: 1px solid black;">
        <thead>
            <tr style="border: 1px solid black; background-color: #9494949a;">
                <th style="border: 1px solid black;">ID</th>
                <th style="border: 1px solid black;">Nome</th>
                <th style="border: 1px solid black;">CNPJ</th>
                <th style="border: 1px solid black;">Telefone</th>
                <th style="border: 1px solid black;">Cidade</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($empresas as $empresa)
                <tr style="text-align: center">
                    <th style="border: 1px solid #9494949a; border-top: none;">{{ $empresa->id }}</th>
                    <td style="border: 1px solid #9494949a; border-top: none;">{{ $empresa->nome_empresa }}</td>
                    <td style="border: 1px solid #9494949a; border-top: none;">{{ $empresa->cnpj }}</td>
                    <td style="border: 1px solid #9494949a; border-top: none;">{{ $empresa->telefone }}</td>
                    <td style="border: 1px solid #9494949a; border-top: none;">{{ $empresa->endereco['city'] }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">Nenhum registro cadastrado</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>