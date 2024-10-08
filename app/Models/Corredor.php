<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Corredor extends Model
{
    use HasFactory;

    protected $table = 'corredores';

    protected $fillable = [
        'nome',
        'email',
        'cpf',
        'telefone',
        'dataNascimento',
        'sexo',
    ];
}
