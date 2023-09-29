<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $token=csrf_token();
        $usuarios=Usuario::all();
        echo $token."\n";
        return $usuarios;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Usuario::create($request->all());
        return 'criado com sucesso'; 
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
    public function update(Request $request, Usuario $usuario)
    {
        $usuario->fill($request->all());
        $usuario->save();
        return "atualizado $usuario com sucesso"; 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        Usuario::destroy($id);
        return 'usuario deletado com sucesso';
    }
}
