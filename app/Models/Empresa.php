<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Vacina;

class Empresa extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome_empresa',
        'cnpj',
        'telefone',
        'email',
        'endereco_id',
        'contador_empresas'
    ];

    public function vacina()
    {
        return $this->hasMany(Vacina::class);
    }

    public function endereco()
    {
        return $this->belongsTo(Endereco::class);
    }
}
