<?php

namespace App\Http\Controllers;

use App\Http\Requests\AutorPostRequest;
use App\Models\Autor;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;
use Symfony\Component\Routing\Annotation\Route;

class AutorController extends Controller
{

    public function __construct(private Autor $autor)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AutorPostRequest $request)
    {
        $this->autor->create([
            'nome' => $request->nome,
            'email' => $request->email,
            'descricao' => $request->descricao,
            'data_criacao' => now(),
        ]);

        return response(
            null,
            ResponseAlias::HTTP_OK
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
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
