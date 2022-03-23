<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 *
 */
class Cliente extends Model
{
    /**
     * @var string
     */
    protected $table = 'clientes';
    /**
     * @var string[]
     */
    protected $fillable = [
        'nome',
        'sobrenome',
        'email',
        'contato',
        'endereco',
        'numero',
        'complemento',
        'cidade',
        'uf'
    ];
}
