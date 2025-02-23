<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Empresa;
use App\Models\Pessoa_vacina;

class Vacina extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'fabricante_id',
        'lote',
        'validade',
        'doses',
        'contador_vacinas'
    ];

    public function empresa()
    {
        return $this->belongsTo(Empresa::class);
    }

    public function pessoa_vacina()
    {
        return $this->hasMany(Pessoa_vacina::class);
    }
}
