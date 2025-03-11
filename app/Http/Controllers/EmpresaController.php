<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmpresaRequest;
use App\Models\Empresa;
use App\Models\Endereco;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $empresas = Empresa::get();
        return view('index', compact('empresas'));
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
    public function store(EmpresaRequest $request)
    {
        \DB::transaction(function () use ($request) {

            $empresa = $request->all();
            $address = Endereco::create($empresa['endereco']);
            $empresa['endereco_id'] = $address->id;
            $empresa = Empresa::create($empresa);

            \DB::table('empresas')->increment('contador_empresas');
        });

        return redirect()->route('site.index')->with('success', 'Empresa cadastrada com sucesso');
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
    public function update(EmpresaRequest $request, string $id)
    {
        \DB::transaction(function () use ($request, $id) {
            $empresa = Empresa::findOrFail($id);

            $dados = $request->all();

            $empresa->endereco->update($dados['endereco']);
            $empresa->update($dados);
        });

        return redirect()->route('site.empresas')->with('success', 'Empresa atualizada com sucesso');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        \DB::transaction(function () use ($id) {
            $empresa = Empresa::findOrFail($id);
            $empresa->delete();
            $empresa->endereco->delete();

        \DB::table('empresas')->decrement('contador_empresas');
        });

        return redirect()->route('site.empresas')->with('success', 'Empresa deletada com sucesso');
    }
}
