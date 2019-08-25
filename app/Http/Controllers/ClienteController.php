<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClienteController extends Controller
{
    public function index() {

        $cliente = Cliente::all();

        //dd($cliente->all());
        $array_clientes = array('clientes'=>$cliente);

        return view('home', $array_clientes);
    }

    public function novo() {

        return view('novo');
    }

    public function editar($id) {

        $cliente = Cliente::find($id);
        //dd($cliente);

        return view('editar', $cliente);
    }

    public function adicionar(Request $request) {

        // dd($request->all());

        try {
            $cliente = new Cliente;

            $cliente->nome = $request->nome_form;
            $cliente->telefone = $request->telefone_form;
            $cliente->idade = $request->idade_form;
            $cliente->email = $request->email_form;

            $cliente->save();

            return back()->with('success', 'Cliente salvo com sucesso');
        } catch(\Exception $erro) {
            return back()->with('error', 'Ocorreu um erro ao adicionar');
        }
    }

    public function update(Request $request) {

        $cliente = Cliente::find($request->id_form);

        $cliente->nome = $request->nome_form;
        $cliente->telefone = $request->telefone_form;
        $cliente->idade = $request->idade_form;
        $cliente->email = $request->email_form;

        $cliente->save();

        return redirect('/')->with('success', 'Cliente Atualizado com sucesso');
    }

    public function excluir($id) {

        $cliente = Cliente::find($id);

        $cliente->delete();

        return redirect('/')->with('success', 'Cliente excluído com sucesso');
    }
}
