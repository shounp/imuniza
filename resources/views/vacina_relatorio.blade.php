<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Relatório de Vacinas</title>
</head>
<body style="font-size: 12px">
    <h2 style="text-align: center">Relatório de Vacinas Cadastradas</h2>
    <table style="border-collapse: collapse; width: 100%; border: 1px solid black;">
        <thead>
            <tr style="border: 1px solid black; background-color: #9494949a;">
                <th style="border: 1px solid black;">ID</th>
                <th style="border: 1px solid black;">Nome</th>
                <th style="border: 1px solid black;">Doses</th>
                <th style="border: 1px solid black;">Lote</th>
                <th style="border: 1px solid black;">Validade</th>
                <th style="border: 1px solid black;">Fabricante</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($vacinas as $vacina)
                <tr style="text-align: center">
                    <th style="border: 1px solid #9494949a; border-top: none;">{{ $vacina->id }}</th>
                    <td style="border: 1px solid #9494949a; border-top: none;">{{ $vacina->nome }}</td>
                    <td style="border: 1px solid #9494949a; border-top: none;">{{ $vacina->doses }}</td>
                    <td style="border: 1px solid #9494949a; border-top: none;">{{ $vacina->lote }}</td>
                    <td style="border: 1px solid #9494949a; border-top: none;">{{ $vacina->validade }}</td>
                    <td style="border: 1px solid #9494949a; border-top: none;">
                        @foreach ($fabricantes as $fabricante)
                            @if ($fabricante->id == $vacina->fabricante_id)
                                {{ $fabricante->nome_empresa }}
                            @endif
                        @endforeach
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">Nenhum registro cadastrado</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>