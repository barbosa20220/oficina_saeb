<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AgendamentoController extends Controller
{
    public function listar()
    {
        $agendamentos = DB::table('agendamentos')
            ->join('clientes', 'agendamentos.cliente_id', '=', 'clientes.id')
            ->join('veiculos', 'agendamentos.veiculo_id', '=', 'veiculos.id')
            ->select(
                'agendamentos.*',
                'clientes.nome as cliente',
                'veiculos.marca',
                'veiculos.modelo',
                'veiculos.placa'
            )
            ->orderBy('agendamentos.data_agendamento', 'ASC')
            ->get();

        return view('agendamentos', compact('agendamentos'));
    }

    public function editar($id)
    {
        $agendamento = DB::table('agendamentos')
            ->where('id', $id)
            ->first();

        return view('editar_agendamento', compact('agendamento'));
    }

    public function atualizar(Request $request, $id)
    {
        DB::table('agendamentos')
            ->where('id', $id)
            ->update([
                'data_agendamento' => $request->data_agendamento,
                'horario' => $request->horario
            ]);

        return redirect('/agendamentos');
    }
}
