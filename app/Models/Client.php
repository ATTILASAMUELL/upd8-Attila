<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'id',
        'nome',
        'cpf',
        'dataDeNacimento',
        'sexo',
        'endereco',
        'estado',
        'cidade'
    ];
}
