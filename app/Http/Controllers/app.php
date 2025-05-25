<?php

namespace App\Http\Controllers;

use App\Models\favoritos;
use App\Models\viagens;
use Illuminate\Support\Facades\Auth;

class app extends Controller
{
    public function getIndex(){
        return view('App.index');
    }
    public function getAlta(){
        $destinos = viagens::all(); // Busca todos os registros
        return view('App.alta',compact('destinos'));
    }
    public function postFavorito($id){
        $userId = Auth::id();
     
        favoritos::create([
            'user_id' => $userId ,
            'viagens_id' => $id
        ]);

        return back()->with('success', 'Viagem favoritada!');
    }

}
