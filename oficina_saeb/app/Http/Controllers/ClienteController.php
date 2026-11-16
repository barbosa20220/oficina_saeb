<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;

class ClienteController extends Controller
{
    public function listar(Request $request)
    {
        $pesquisa = $request->pesquisa;

        $clientes = DB::table('clientes')
            ->where('nome', 'LIKE', '%' . $pesquisa . '%')
            ->get();

        return view('clientes', compact('clientes'));
    }

    public function editar($id)
    {
        $cliente = DB::table('clientes')
            ->where('id', $id)
            ->first();

        return view('editar_cliente', compact('cliente'));
    }

    public function atualizar(Request $request, $id)
    {
        $dados = [
            'nome' => $request->nome,
            'telefone' => $request->telefone,
            'email' => $request->email,
            'endereco' => $request->endereco
        ];

        if ($request->filled('cpf')) {
            $dados['cpf'] = Crypt::encryptString($request->cpf);
        }

        DB::table('clientes')
            ->where('id', $id)
            ->update($dados);

        return redirect('/clientes');
    }
}
