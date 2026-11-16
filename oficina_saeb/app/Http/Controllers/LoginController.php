<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function entrar(Request $request)
    {
        $usuario = DB::table('usuarios')
            ->where('email', $request->email)
            ->first();

        if (!$usuario || !Hash::check($request->senha, $usuario->senha)) {
            return back()->with('erro', 'E-mail ou senha incorretos!');
        }

        $request->session()->put('usuario', $usuario->nome);

        return redirect('/inicio');
    }

    public function sair(Request $request)
    {
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
