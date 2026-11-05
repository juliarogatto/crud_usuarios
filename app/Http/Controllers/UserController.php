<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
   // Lista todos os usuários
   public function index()
   {
      $users = User::orderBy('created_at', 'asc')->get();
      return view('users.index', compact('users'));
   }

   // Mostra um único usuário
   public function show(User $user)
   {
      return view('users.show', compact('user'));
   }

   // Mostra o formulário
   public function create()
   {
      return view('users.create');
   }

   // Valida e grava o novo usuário
   public function store(Request $request)
   {
      $dados = $request->validate([
         'name' => 'required|string|max:255',
         'email' => 'required|email|unique:users,email',
         'password' => 'required|min:8',
      ]);
      $dados['password'] = Hash::make($dados['password']);

      User::create($dados);
   return redirect()->route('users.index')
      ->with('sucesso', 'Usuário cadastrado com sucesso!');
   }

}

