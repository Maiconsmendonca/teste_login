<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function index() {
        return view('app.clienteadicionar');
    }

    public function cadastrar(Request $request) {

        $msg = '';

        if ($request->input('_token') != ''){
            $regras = [
                'nome' => 'required|min:3|max:50',
                'sobrenome' => 'required|min:3|max:50',
                'email' => 'email',
                'contato' => 'required|min:3|max:12',
                'endereco' => 'required|min:3|max:50',
                'numero' => 'required|min:1|max:11',
                'complemento' =>'min:0|max:30',
                'cidade' => 'required|min:2|max:255',
                'uf' => 'required|min:2|max:2'
            ];

            $feedback = [
                'required' => 'O campo :attribute deve ser preenchido',
                'min:3' => 'O campo :attribute deve ter no mínimo 3 caracteres',
                'min:2' => 'O campo :attribute deve ter no mínimo 2 caracteres',
                'max:50' => 'O campo :attribute deve ter no máximo 50 caracteres',
                'max:12' => 'O campo :attribute deve ter no máximo 12 caracteres',
                'max:11' => 'O campo :attribute deve ter no máximo 11 caracteres',
                'max:30' => 'O campo :attribute deve ter no máximo 30 caracteres',
                'max:2' => 'O campo :attribute deve ter no máximo 2 caracteres',
                'email.email' => 'O campo e-mail não foi preenchido corretamente'
            ];

            $request->validate($regras, $feedback);

            $cliente = new Cliente();
            $cliente->create($request->all());

        }

        return redirect()->action([\App\Http\Controllers\ClienteController::class, 'index'])->with('mensagem', 'Cliente adicionado com sucesso!');
    }

    public function listar() {
        return view('app.clientelistar');

    }

    public function localizar(Request $request)
    {
        $clientes = Cliente::where('nome', 'like', '%'.$request->input('nome').'%')
            ->where('sobrenome', 'like', '%'.$request->input('sobrenome').'%')
            ->where('email', 'like', '%'.$request->input('email').'%')
            ->where('contato', 'like', '%'.$request->input('contato').'%')
            ->where('endereco', 'like', '%'.$request->input('endereco').'%')
            ->where('numero', 'like', '%'.$request->input('numero').'%')
            ->where('complemento', 'like', '%'.$request->input('complemento').'%')
            ->where('cidade', 'like', '%'.$request->input('cidade').'%')
            ->where('uf', 'like', '%'.$request->input('uf').'%')
            ->get();

        return view('app.clientelocalizar', ['clientes' => $clientes]);
    }

    public function editar($id) {

        $clientes = Cliente::find($id);

        return view('app.clienteeditar', ['clientes' => $clientes]);
    }

    public function confirmar(Request $request) {

        if ($request->input('_token') != '' && $request->input('id') != ''){

            $clientes = Cliente::find($request->input('id'));
            $clientes ->update($request->all());

        }
        return redirect()->action([\App\Http\Controllers\ClienteController::class, 'index'])->with('mensagem', 'Cliente alterado com sucesso!');
    }

    public function excluir($id) {

        Cliente::find($id)->delete();

        return redirect()->action([\App\Http\Controllers\ClienteController::class, 'index'])->with('mensagem', 'Cliente excluido com sucesso!');
    }

}
