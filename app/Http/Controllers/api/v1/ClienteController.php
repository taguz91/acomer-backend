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
        $cliente->numero_compras = 0;
        $cliente->ultima_compra = date('Y-m-d H:m:s');
        $cliente->total_consumos = 0;
        $guardado = $cliente->save();
        return [
            'message' => 'Guardado',
            'data' => $cliente,
            'guardado' => $guardado
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
