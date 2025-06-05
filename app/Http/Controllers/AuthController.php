<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class AuthController extends Controller
{
    public function getLogin(){
        return view('Auth.login');
    }
    public function getCadastro(){
        return view('Auth.cadastro');
    }

    public function postCadastro(Request $request){
        
        $request->validate([
            'nome_completo'     => 'required|string|max:255',
            'data_nascimento'   => 'required|',
            'nacionalidade'     => 'required|string|max:100',
            'telefone'          => 'required|string|max:20',
            'cpf'               => 'required|string|max:20|unique:users,cpf',
            'endereco'          => 'required|string|max:255',
            'passaporte'        => 'nullable|string|max:20',
            'email'             => 'required|email|unique:users,email',
            'password'          => 'required|min:6|max:20'
        ]);

        User::create([
            'nome_completo'     => $request->nome_completo,
            'data_nascimento'   => Carbon::createFromFormat('d/m/Y', $request->data_nascimento)->format('Y-m-d'),
            'nacionalidade'     => $request->nacionalidade,
            'telefone'          => $request->telefone,
            'cpf'               => $request->cpf,
            'endereco'          => $request->endereco,
            'passaporte'        => $request->passaporte,
            'email'             => $request->email,
            'password'          => Hash::make($request->password), 
        ]);

        return redirect('/login')->with('success', 'Cadastro realizado com sucesso!');

    }
    
    public function postlogin(Request $request){

        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->intended();
        }

        // Login falhou
        return back()->withErrors([
            'email' => 'As credenciais estão incorretas.',
        ]);
        
    }
    
}
