<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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
            'data_nascimento'   => 'required|date',
            'nacionalidade'     => 'required|string|max:100',
            'telefone'          => 'required|string|max:20',
            'cpf'               => 'required|string|max:20|unique:users,cpf',
            'endereco'          => 'required|string|max:255',
            'passaporte'        => 'nullable|string|max:20',
            'email'             => 'required|email|unique:users,email',
            'password'          => 'required|min:6|max:20', // Use se quiser confirmação de senha
        ]);

        User::create([
            'nome_completo'     => $request->nome_completo,
            'data_nascimento'   => $request->data_nascimento,
            'nacionalidade'     => $request->nacionalidade,
            'telefone'          => $request->telefone,
            'cpf'               => $request->cpf,
            'endereco'          => $request->endereco,
            'passaporte'        => $request->passaporte,
            'email'             => $request->email,
            'password'          => Hash::make($request->password), // nunca armazene senhas sem hash
        ]);

        return redirect('/')->with('success', 'Cadastro realizado com sucesso!');

    }
}
