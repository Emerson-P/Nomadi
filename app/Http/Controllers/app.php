<?php

namespace App\Http\Controllers;

use App\Models\DestinosTuristico;
use Illuminate\Http\Request;

class app extends Controller
{
    public function getIndex(){
        return view('App.index');
    }
    public function getAlta(){
        $destinos = DestinosTuristico::all(); // Busca todos os registros
        return view('App.alta',compact('destinos'));
    }
}
