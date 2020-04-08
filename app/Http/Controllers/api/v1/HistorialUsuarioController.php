<?php

namespace App\Http\Controllers\api\v1;

use Illuminate\Http\Request;
use App\Models\HistorialUsuario;
use App\Http\Controllers\Controller;
use App\Http\Resources\HistorialUsuario\HistorialUsuarioCollection;
use App\Http\Requests\HistorialUsuario\HistorialUsuarioCreateRequest;
use App\Http\Requests\HistorialUsuario\HistorialUsuarioUpdateRequest;

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
            ->paginate()
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
        $his = new HistorialUsuario($request->all());
        return $this->saveObject($his);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $his = HistorialUsuario::findOrFail($id);
        return $this->showResponse($his);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(HistorialUsuarioUpdateRequest $request, $id)
    {
        $his = HistorialUsuario::findOrFail($id);
        return $this->updateObject($his, $request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $his = HistorialUsuario::findOrFail($id);
        return $this->deleteObject($his);
    }
}
