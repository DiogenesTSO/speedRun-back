<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Corredor;

class CorredorController extends Controller
{
    public function index()
    {
        return Corredor::all();
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
        /*$corredores = Corredor::create([
            "nome"=>$request->input("nome"),
            "email"=>$request->input("email"),
            "dataNascimento"=>$request->input("dataNascimento"),
            "sexo"=>$request->input("sexo"),
        ]);

        return $corredores;

    }*/

        //Corredor::create($request->all());
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
