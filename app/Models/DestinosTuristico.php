<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DestinosTuristico extends Model
{
    protected $fillable = [
        'nome',
        'localizacao',
        'descricao',
        'atracoes_turisticas',
        'caminho_fotos',
        'precos',
        'hoteis',
        'pacotes_promocionais',
        'dia_horario_ida',
        'dia_horario_volta',
    ];

    // Conversão automática de campos para tipos nativos do PHP
    protected $casts = [
        'precos' => 'float',
        'dia_horario_ida' => 'datetime',
        'dia_horario_volta' => 'datetime',
    ];
}
