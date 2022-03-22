<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(Request $request) {
        $erro = '';

        if ($request->get('erro') == 1) {
            $erro = 'Usuário e ou senha não existe';
        }

        if ($request->get('erro') == 2) {
            $erro = 'Necessário fazer login para ter acesso á página';
        }

        return view('login', ['erro' =>$erro]);
    }

    public function autenticar(Request $request) {
        //regras de validação
        $regras = [
            'usuario' => 'required',
            'senha' => 'required'
        ];

        //Mensagens de Feedback de validação
        $feedback = [
          'usuario.required' => 'O campo usuário é obrigatório',
          'senha.required' => 'O campo senha é obrigatório'
        ];

        $request->validate($regras, $feedback);

        $name = $request->get('usuario');
        $password = $request->get('senha');

        //iniciar model user
        $user = new User();

        $usuario = $user->where('name', $name)->where('password', $password)->get()->first();

        if(isset($usuario->name)) {

            session_start();
            $_SESSION['nome'] = $usuario->name;

            return redirect()->route('home');

        }else {
            return redirect()->route('login', ['erro' => 1]);
        }
    }
    public function sair() {
        session_destroy();
        return redirect()->route('login');
    }
}
