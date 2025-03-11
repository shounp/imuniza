<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use App\Models\Vacina;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;

class PessoaViewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Consulta SQL para ordenar pessoas por nome e vacinas por data
        $pessoas = Pessoa::select('pessoas.*')
            ->leftJoin('pessoa_vacinas', 'pessoas.id', '=', 'pessoa_vacinas.pessoa_id')
            ->orderBy('pessoas.nome', 'asc')
            ->orderBy('pessoa_vacinas.created_at', 'asc')
            ->with(['pessoa_vacina' => function ($query) {
                $query->orderBy('created_at', 'asc');
            }])
            ->distinct()
            ->get();

        $vacinas = Vacina::get();
        return view('pessoas', compact('pessoas', 'vacinas'));
    }

    public function gerarRelatorioPessoas()
    {
        $pessoas = Pessoa::select('pessoas.*')
            ->leftJoin('pessoa_vacinas', 'pessoas.id', '=', 'pessoa_vacinas.pessoa_id')
            ->orderBy('pessoas.nome', 'asc')
            ->orderBy('pessoa_vacinas.created_at', 'asc')
            ->with(['pessoa_vacina' => function ($query) {
                $query->orderBy('created_at', 'asc');
            }])
            ->distinct()
            ->get();

        $pessoas->each(function ($pessoa) {
            $pessoa->cpf = substr($pessoa->cpf, 0, 3) . '.***.***-' . substr($pessoa->cpf, -2);
            $pessoa->nome_mae = 'Nome ocultado (LGPD)';
            $pessoa->email = 'E-mail ocultado (LGPD)';
            $pessoa->endereco = [
                'cep' => substr($pessoa->endereco['cep'], 0, 5) . '-***',
                'country' => $pessoa->endereco['country'],
                'city' => $pessoa->endereco['city'],
                'state' => $pessoa->endereco['state'],
                'district' => 'Bairro ocultado (LGPD)',
                'street' => 'Rua ocultada (LGPD)',
                'number' => 'Número ocultado (LGPD)',
                'complement' => 'Complemento ocultado (LGPD)',
            ];
        });

        $pdf = Pdf::loadView('pessoa_relatorio', ['pessoas' => $pessoas]);
        return $pdf->download('relatorio_pessoas.pdf');
    }

    public function gerarPDFpessoa(string $id)
    {

        $pessoa_vacinas = Pessoa::find($id)->pessoa_vacina;

        $vacinas = [];

        foreach ($pessoa_vacinas as $pessoa_vacina) {
            $vacinas[] = Vacina::where('id', $pessoa_vacina->vacina_id)->first(); // ✅ Adiciona ao array
        }

        $pessoa = Pessoa::with(['pessoa_vacina' => function ($query) {
            $query->orderBy('created_at', 'asc');
        }])->find($id);
        $pessoa->cpf = substr($pessoa->cpf, 0, 3) . '.***.***-' . substr($pessoa->cpf, -2);
            $pessoa->nome_mae = 'Nome ocultado (LGPD)';
            $pessoa->email = 'E-mail ocultado (LGPD)';
            $pessoa->endereco = [
                'cep' => substr($pessoa->endereco['cep'], 0, 5) . '-***',
                'country' => $pessoa->endereco['country'],
                'city' => $pessoa->endereco['city'],
                'state' => $pessoa->endereco['state'],
                'district' => 'Bairro ocultado (LGPD)',
                'street' => 'Rua ocultada (LGPD)',
                'number' => 'Número ocultado (LGPD)',
                'complement' => 'Complemento ocultado (LGPD)',
            ];
        $pdf = Pdf::loadView('pessoa.gerarPDFpessoa', compact('pessoa', 'pessoa_vacinas', 'vacinas'));
        return $pdf->download('pessoa_' . $id . '.pdf');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
