<?php

namespace App\Http\Controllers\api\v1;

use App\Models\Cliente;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Cliente\ClienteCollection;
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
        return new ClienteCollection(
            Cliente::select([
                'id',
                'nombre',
                'apellido',
                'identificacion',
                'telefono',
                'numero_compras',
                'ultima_compra',
                'total_consumos'
            ])->paginate()
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClienteCreateRequest $request)
    {
        $cliente = new Cliente($request->all());
        return $this->saveObject($cliente);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cli = Cliente::findOrFail($id);
        return $this->showResponse($cli);
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
        $cliente = Cliente::findOrFail($id);
        return $this->updateObject($cliente, $request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cli = Cliente::findOrFail($id);
        return $this->deleteObject($cli);
    }
}
