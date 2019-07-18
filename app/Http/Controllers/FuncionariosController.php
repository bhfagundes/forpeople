<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Funcionarios;
class FuncionariosController extends Controller
{
    public function index()
    {
        return Funcionarios::all();
    }

    public function show($id)
    {
        $funcionario = Funcionarios::find($id);
        if (is_null($funcionario))
        {
            return response()->json("Não existe funcionário cadastrado com este id", 200);    
        }
        return $funcionario;
    }

    public function store(Request $request)
    {
        $funcionarios = Funcionarios::create($request->all());
        return response()->json($funcionarios, 201);
    }

    public function update(Request $request)
    {
        
        $funcionario = Funcionarios::find($request->input('id'));
        if (is_null($funcionario))
        {
            return response()->json("Não existe funcionário cadastrado com este id", 200);    
        }
        $funcionario->update($request->all());
        return response()->json($funcionario, 200);
    }

    public function delete(Request $request)
    {
        $funcionario = Funcionarios::find($request->input('id'));
        if (is_null($funcionario))
        {
            return response()->json("Não existe funcionário cadastrado com este id", 200);    
        }
        $funcionario->delete();
        return response()->json(null, 204);
    }
}
