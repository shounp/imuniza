<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use App\Models\Vacina;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PessoaViewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pessoas = Pessoa::get();
        $vacinas = Vacina::get();
        return view('pessoas', compact('pessoas' , 'vacinas'));
    }

    public function gerarPDF()
    {
        $pessoas = Pessoa::orderByDesc('created_at')->get();

        $pdf = Pdf::loadView('pessoa.gerarPDF', ['pessoas' => $pessoas])->setPaper('a4', 'portrait');

        return $pdf->stream('pessoas.pdf');
    }

    public function gerarPDFpessoa(Request $request, string $id)
    {
        $pessoa = Pessoa::findOrFail($id);

        $pdf = Pdf::loadView('pessoa.gerarPDFpessoa', ['pessoa' => $pessoa])->setPaper('a4', 'portrait');

        return $pdf->stream('Dados-Pessoais.pdf');
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
