<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class carrinho extends Model
{
     protected $fillable = [
        'id',
        'user_id',
        'viagens_id',
        'quantidade'
    ];

}
