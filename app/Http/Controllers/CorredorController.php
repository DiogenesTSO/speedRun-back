<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Corredor;

class CorredorController extends Controller
{
    public function index(Request $request)
    {
        $corredores = Corredor::all();

        return response()->json($corredores);
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Corredor::create($request->all());
        $validatedData = $request->validate([
            'nome' => 'required|string',
            'email' => 'required|string|email',
            'cpf' => 'required|unique:corredores,cpf|max:11',
            'telefone' => 'required|string|max:20',
            'dataNascimento' => 'required|date',
            'sexo' => 'required|in:M,F',
        ]);

        $corredores = Corredor::create($validatedData);

        return response()->json( $corredores, 201);
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //Validar os dados
        $validatedData = $request->validate([
            'nome' => 'required|string',
            'email' => 'required|string|email',
            'cpf' => 'required|string|unique:corredores,cpf',
            'telefone' => 'required|string|max:20',
            'dataNascimento' => 'required|date',
            'sexo' => 'required|in:M,F',
        ]);

        //Encontrar o corredor e atualizar
        $corredor = Corredor::findOrFail($id);
        $corredor->update($validatedData);

        return response()->json( $corredor, 200);
    }

    public function destroy(string $id)
    {
        $corredor = Corredor::find($id);

        if (!$corredor) {
            return response()->json([]);
        }

        $corredor->delete();

        return response()->json(null, 204);
    }
}
