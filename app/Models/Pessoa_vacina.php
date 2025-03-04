<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa_vacina extends Model
{
    use HasFactory;
    protected $fillable = [
        'pessoa_id',
        'vacina_id',
        'dose', // Adicionado aqui
    ];

    public function pessoa()
    {
        return $this->belongsTo(Pessoa::class);
    }

    public function vacina()
    {
        return $this->belongsTo(Vacina::class);
    }
}