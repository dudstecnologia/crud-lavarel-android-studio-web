<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Cliente;

class ClienteController extends Controller
{
    public function clientes() {

        return Cliente::all();
    }

    public function getCliente($id) {

        $cliente = Cliente::find($id);

        return $cliente;
    }

    public function adicionar(Request $request) {

        try {

            $cliente = new Cliente;

            $cliente->nome = $request->nome_app;
            $cliente->telefone = $request->telefone_app;
            $cliente->idade = $request->idade_app;
            $cliente->email = $request->email_app;

            $cliente->save();

            return ['insert' => 'ok'];

        } catch(\Exception $erro) {

            return ['insert' => 'erro'];
        }
    }

    public function atualizar(Request $request, $id) {

        try {

            $cliente = Cliente::find($id);

            $cliente->nome = $request->nome_app;
            $cliente->telefone = $request->telefone_app;
            $cliente->idade = $request->idade_app;
            $cliente->email = $request->email_app;

            $cliente->save();

            return ['update' => 'ok'];

        } catch(\Exception $erro) {

            return ['update' => 'erro'];
        }
    }

    public function delete($id) {

        try {
            $cliente = Cliente::find($id);

            $cliente->delete();

            return ['delete' => 'ok'];
        } catch(\Exception $erro) {

            return ['delete' => 'erro'];
        }
    }
}
