<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use App\Models\Pessoa_vacina;
use App\Models\Vacina;
use Illuminate\Http\Request;

class VacinaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vacinas = Vacina::get();
        $empresas = Empresa::get();

        return view('index', compact('empresas', 'vacinas'));
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
            $vacina = $request->all();
            $vacina['fabricante_id'] = $request->input('fabricante_id');
            $vacina = Vacina::create($vacina);

            \DB::table('vacinas')->increment('contador_vacinas');
        });

        return redirect()->route('site.index')->with('success', 'Vacina cadastrada com sucesso');
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
        \DB::transaction(function () use ($request, $id) {
            $vacina = Vacina::findOrFail($id);
            $vacina->update($request->all());
        });

        return redirect()->route('site.vacinas')->with('success', 'Vacina atualizada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $vacina = Vacina::findOrFail($id);

        $vacinaPessoas = Pessoa_vacina::where('vacina_id', $id)->get();

        foreach ($vacinaPessoas as $vacinaPessoa) {
            $vacinaPessoa->delete();
        }

        $vacina->delete();

        \DB::table('vacinas')->increment('contador_vacinas');

        return redirect()->route('site.vacinas')->with('success', 'Vacina deletada com sucesso');
    }
}
