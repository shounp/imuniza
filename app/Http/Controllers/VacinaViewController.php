<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use App\Models\Vacina;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class VacinaViewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vacinas = Vacina::get();
        $fabricantes = Empresa::get();
        return view('vacinas', compact('vacinas', 'fabricantes'));
    }

    public function gerarRelatorioVacinas()
    {
        $vacinas = Vacina::get();
        $fabricantes = Empresa::get();
        $pdf = Pdf::loadView('vacina_relatorio', ['vacinas' => $vacinas, 'fabricantes' => $fabricantes]);
        return $pdf->download('relatorio_vacinas.pdf');
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
