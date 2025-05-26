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
        $destinos = viagens::all();
        $favoritos = favoritos::where('user_id', Auth::id())->get();

        return view('App.alta',compact('destinos','favoritos'));
    }
    public function postAddFavorito($id){
        $userId = Auth::id();
     
        favoritos::create([
            'user_id' => $userId ,
            'viagens_id' => $id
        ]);

        return back()->with('success', 'Viagem favoritada!');
    }

    public function postRemoveFavorito($id){
        favoritos::destroy($id);
        return back()->with('success', 'Viagem desfavoritada!');
    }
}
