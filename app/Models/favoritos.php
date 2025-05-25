<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class favoritos extends Model
{
    protected $fillable = [
        'id',
        'user_id',
        'viagens_id'
    ];

}
