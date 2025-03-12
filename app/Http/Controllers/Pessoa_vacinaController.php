<?php

namespace App\Http\Controllers;

use App\Models\Pessoa_vacina;
use App\Models\Vacina;
use Illuminate\Http\Request;

class Pessoa_vacinaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Request $request, string $id)
    {
        // Validação dos dados enviados pelo formulário
        $request->validate([
            'vacina' => 'required|exists:vacinas,id', // Garante que a vacina existe
            'dose' => [
                'required',
                'integer',
                'min:1',
                function ($attribute, $value, $fail) use ($request) {
                    // Busca a vacina selecionada
                    $vacina = Vacina::find($request->input('vacina'));
                    if ($vacina && $value > $vacina->doses) {
                        $fail("A dose informada ($value) excede o número máximo de doses da vacina ({$vacina->doses}).");
                    }
                },
            ],
        ]);
        // Cria o registro na tabela pessoa_vacinas
        Pessoa_vacina::create([
            'pessoa_id' => $id,
            'vacina_id' => $request->input('vacina'),
            'dose' => $request->input('dose'),
        ]);

        // Redireciona com mensagem de sucesso
        return redirect()->route('site.pessoas')->with('success', 'Vacina atribuída à pessoa com sucesso!');
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
