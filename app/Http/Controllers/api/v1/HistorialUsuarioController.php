<?php

namespace App\Http\Controllers\api\v1;

use Illuminate\Http\Request;
use App\Models\HistorialUsuario;
use App\Http\Controllers\Controller;
use App\Http\Resources\HistorialUsuario\HistorialUsuarioCollection;
use App\Http\Requests\HistorialUsuario\HistorialUsuarioCreateRequest;

class HistorialUsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new HistorialUsuarioCollection(
            HistorialUsuario::select([
                'id',
                'accion',
                'plataforma',
                'created_at',
                'id_usuario'
            ])
            ->with('usuario:id,nombre,correo')
            ->get()
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HistorialUsuarioCreateRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
