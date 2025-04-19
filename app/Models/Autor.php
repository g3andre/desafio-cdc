<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    /** @use HasFactory<\Database\Factories\AutorFactory> */
    use HasFactory;

    protected $table = 'autores';
    public $timestamps = false;

    protected $fillable = [
        'nome',
        'email',
        'descricao',
        'data_criacao'
    ];
}
