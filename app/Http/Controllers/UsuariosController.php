<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class UsuariosController extends Controller
{
    public function index()
    {
        $dados = DB::table('usuarios')->get();

        return view('usuarios.listar', ['usuarios' => $dados]);
    }

    public function show($id)
    {
        $usuarios = DB::table('usuarios')->where('id', $id)->first();

        return view('usuarios.detalhes', ['usuarios' => $usuarios]);
    }

    public function create()
    {
        return view('usuarios.novo');
    }

    public function store(Request $request)
    {
        $validated = Validator::make($request->all(), [
            'nome'  => 'required|min:3|max:120',
            'email'      => 'required|email',
            'idade' => 'nullable|numeric|min:2|max:100',
            'telefone'      => 'nullable|numeric',
        ]);

        if ($validated->fails()) {
            return redirect('usuarios/novo')->withErrors($validated)->withInput();
        } else {
            DB::table('usuarios')->insert([
                'nome'      => $request->nome,
                'email'     => $request->email,
                'idade'     => $request->idade,
                'telefone'  => $request->telefone
            ]);

            return redirect('usuarios')->with('mensagem', 'Usuário cadastrado.');
        }
    }

    public function edit($id)
    {
        if (!DB::table('usuarios')->where('id', $id)->first()) {
            return redirect('usuarios')->with('mensagem', 'Usuário não encontrado.');
        }

        $usuario = DB::table('usuarios')->where('id', $id)->first();
        return view('usuarios.editar', ['usuarios' => $usuario]);
    }

    public function update(Request $request, $id)
    {
        if (!DB::table('usuarios')->where('id', $id)->first()) {
            return redirect('usuarios')->with('mensagem', 'Usuário não encontrado.');
        }

        $validated = Validator::make($request->all(), [
            'nome'  => 'required|min:3|max:120',
            'email'      => 'required|email',
            'idade' => 'nullable|numeric|min:2|max:100',
            'telefone' => 'nullable|numeric'
        ]);

        if ($validated->fails()) {
            return redirect('usuarios/editar/' . $id)->withErrors($validated);
        } else {
            $usuarios = [
                'nome'      => $request->nome,
                'email'     => $request->email,
                'idade'     => $request->idade,
                'telefone'  => $request->telefone
            ];

            DB::table('usuarios')->where('id', $id)->update($usuarios);
            return redirect('usuarios')->with('mensagem', 'Usuário alterado.');
        }
    }

    public function destroy($id)
    {
        if (!DB::table('usuarios')->where('id', $id)->first()) {
            return redirect('usuarios')->with('mensagem', 'Usuário não encontrado.');
        }

        DB::table('usuarios')->where('id', $id)->delete();
        return redirect('usuarios')->with('mensagem', 'Usuário excluído.');
    }
}
