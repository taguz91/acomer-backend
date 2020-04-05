<?php

namespace App\Http\Controllers\api\v1;

use App\Models\Cliente;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Cliente\ClienteCreateRequest;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return Cliente::select([
        //     'id',
        //     'nombre',
        //     'apellido',
        //     'extra' => Cliente::selectRaw('MAX(created_at)')
        //         ->whereColumn('id', 'clientes.id')
        // ])->get();
        // return Cliente::with(['favoritos.plato:id,url_imagen', 'sugerencias'])->get();
        return Cliente::with(['facturas.pedido.mesa'])->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClienteCreateRequest $request)
    {
        return [
            'message' => 'Guardado',
            'data' => $request->all()
        ];
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
    public function update(ClienteCreateRequest $request, $id)
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
