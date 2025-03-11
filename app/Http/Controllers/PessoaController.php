<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\Http\Request;
use App\Models\Pessoa;
use App\Models\Endereco;
use App\Models\Pessoa_vacina;
use App\Models\Vacina;

class PessoaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pessoas = Pessoa::get();
        $empresas = Empresa::get();
        $vacinas = Vacina::get();

        return view('index', compact('pessoas', 'empresas', 'vacinas'));
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
        \DB::transaction(function () use ($request) {
            $pessoa = $request->all();
            $address = Endereco::create($pessoa['endereco']);
            $pessoa['endereco_id'] = $address->id;
            $pessoa = Pessoa::create($pessoa);

            \DB::table('pessoas')->increment('contador_pessoas');
        });


        return redirect()->route('site.index')->with('success', 'Tarefa cadastratada com sucesso');
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
        $pessoa = Pessoa::findOrFail($id);
        $dados = $request->all();

        $pessoa->endereco->update($dados['endereco']);
        $pessoa->update($dados);

        return redirect()->route('site.pessoas')->with('success', 'pessoa atualizada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pessoa = Pessoa::findOrFail($id);
        $pessoaVacinas = Pessoa_vacina::where('pessoa_id', $id)->get();


        foreach ($pessoaVacinas as $pessoaVacina) {
            $pessoaVacina->delete();
        }

        $pessoa->delete();

        $pessoa->endereco->delete();


        \DB::table('pessoas')->decrement('contador_pessoas');

        return redirect()->route('site.pessoas');
    }

}
