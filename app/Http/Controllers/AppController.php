<?php

namespace App\Http\Controllers;

use App\Models\carrinho;
use App\Models\favoritos;
use App\Models\viagens;
use Illuminate\Support\Facades\Auth;

class AppController extends Controller
{
    public function getIndex(){
        return view('App.index');
    }
    public function getAlta(){
        $userId = Auth::id();
        $destinos = viagens::all();
        $favoritos = favoritos::where('user_id', $userId)->get();
        $carrinhos = carrinho::where('user_id', $userId)->get();
        return view('App.alta',compact('destinos','favoritos','carrinhos'));
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

    public function getCarrinho(){
        $userId = Auth::id();
        
        $favoritos = favoritos::where('user_id', $userId)->get();
        // $carrinhos = carrinho::where('user_id', $userId)->get();
        $carrinhos = Carrinho::with('viagem')  
        ->where('user_id', $userId)  
        ->get();

        return view('app.carrinho',compact('carrinhos','favoritos'));
    }
    public function postAddCarrinho($id){
        $userId = Auth::id();
     
        carrinho::create([
            'user_id' => $userId ,
            'viagens_id' => $id,
            'quantidade' => 1
        ]);
        return back()->with('success', 'Viagem adiconada ao carrinho!');
    }
    
    public function postRemoveCarrinho($id){
        carrinho::destroy($id);
        return back()->with('success', 'Viagem desfavoritada!');

    }
    public function getFavoritos(){
        $userId = Auth::id();

        $favoritos = favoritos::with('viagem')  
        ->where('user_id', $userId)  
        ->get();
        $carrinhos = carrinho::where('user_id', $userId)->get();
        return view('app.favoritos',compact('favoritos','carrinhos'));
    }

    public function getQuemSomos(){
        return view('app.quemSomos');
    }
}
