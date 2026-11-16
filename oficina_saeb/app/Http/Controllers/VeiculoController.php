<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VeiculoController extends Controller
{
    public function listar()
    {
        $clientes = DB::table('clientes')->get();

        return view('veiculos', compact('clientes'));
    }

    public function cadastrar(Request $request)
    {
        DB::table('veiculos')->insert([
            'cliente_id' => $request->cliente_id,
            'marca' => $request->marca,
            'modelo' => $request->modelo,
            'placa' => $request->placa,
            'ano' => $request->ano,
            'cor' => $request->cor
        ]);

        return redirect('/veiculos');
    }
}