<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pessoa;

class Endereco extends Model
{
    use HasFactory;

    protected $fillable = [
        'cep',
        'country',
        'city',
        'state',
        'district',
        'street',
        'number',
        'complement',
    ];

    public function pessoa()
    {
        return $this->hasMany(Pessoa::class);
    }

    public function empresa()
    {
        return $this->hasMany(Empresa::class);
    }
}
