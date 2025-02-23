<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Endereco;
use App\Models\Pessoa_vacina;

class Pessoa extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'cpf',
        'num_sus',
        'data_nascimento',
        'nome_mae',
        'sexo',
        'estado_civil',
        'escolaridade',
        'raca_cor',
        'plano_saude',
        'endereco_id',
        'contador_pessoas'
    ];

    public function endereco()
    {
        return $this->belongsTo(Endereco::class);
    }

    public function pessoa_vacina()
    {
        return $this->hasMany(Pessoa_vacina::class);
    }
}
