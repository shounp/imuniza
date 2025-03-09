<?php

use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\EmpresaViewController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PessoaController;
use App\Http\Controllers\PessoaViewController;
use App\Http\Controllers\VacinaController;
use App\Http\Controllers\VacinaViewController;
use App\Http\Controllers\Pessoa_vacinaController;

Route::get('/', [PessoaController::class, 'index'])->name('site.index');
Route::get('/pessoas', [PessoaViewController::class, 'index'])->name('site.pessoas');
Route::get('/vacinas', [VacinaViewController::class, 'index'])->name('site.vacinas');
Route::get('/empresas', [EmpresaViewController::class, 'index'])->name('site.empresas');

Route::post('/pessoa/store', [PessoaController::class, 'store'])->name('pessoa.store');
Route::post('/pessoa/update/{id}', [PessoaController::class, 'update'])->name('pessoa.update');
Route::delete('/pessoa/delete/{id}', [PessoaController::class, 'destroy'])->name('pessoa.delete');
Route::post('/pessoa/vacina/{id}', [Pessoa_vacinaController::class, 'store'])->name('pessoa.vacina');

Route::post('/vacina/store', [VacinaController::class, 'store'])->name('vacina.store');
Route::post('/vacina/update/{id}', [VacinaController::class, 'update'])->name('vacina.update');
Route::delete('/vacina/delete/{id}', [VacinaController::class, 'destroy'])->name('vacina.delete');

Route::post('/empresa/store', [EmpresaController::class, 'store'])->name('empresa.store');
Route::post('/empresa/update/{id}', [EmpresaController::class, 'update'])->name('empresa.update');
Route::delete('/empresa/delete/{id}', [EmpresaController::class, 'destroy'])->name('empresa.delete');

// Rotas para relatórios
Route::get('/relatorio/pessoas', [PessoaViewController::class, 'gerarRelatorioPessoas'])->name('relatorio.pessoas');
Route::get('/relatorio/empresas', [EmpresaViewController::class, 'gerarRelatorioEmpresas'])->name('relatorio.empresas');
Route::get('/relatorio/vacinas', [VacinaViewController::class, 'gerarRelatorioVacinas'])->name('relatorio.vacinas');

Route::get('/gerar-pdf-pessoa/{id}', [PessoaViewController::class, 'gerarPDFpessoa'])->name('gerador.pessoa.pdf');