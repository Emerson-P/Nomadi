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
    public function viagem()
    {
         return $this->belongsTo(viagens::class,'viagens_id');
    }
}
