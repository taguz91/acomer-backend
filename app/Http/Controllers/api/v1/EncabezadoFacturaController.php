<?php

namespace App\Http\Controllers\api\v1;

use App\Models\EncabezadoFactura;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\EncabezadoFactura\EncabezadoFacturaCollection;
use App\Http\Requests\EncabezadoFactura\EncabezadoFacturaCreateRequest;

class EncabezadoFacturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new EncabezadoFacturaCollection(
            EncabezadoFactura::select([
                'id_restaurante',
                'id_cliente',
                'id_pedido',
                'nombre',
                'direccion',
                'telefono',
                'identificacion',
                'fecha',
                'total',
            ])->with('restaurante:id,nombre_comercial')
            ->with('cliente:id,nombre,apellido,identificacion,telefono')
            ->with('pedido:id,platos')
            ->paginate()
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EncabezadoFacturaCreateRequest $request)
    {
        $encfac = new EncabezadoFactura($request->all());
        return $this->saveObject($encfac);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $encfac = EncabezadoFactura::findOrFail($id);
        return $this->showResponse($encfac);
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
        $encfac = EncabezadoFactura::findOrFail($id);
        return $this->updateObject($encfac, $request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $encfac = EncabezadoFactura::findOrFail($id);
        return $this->deleteObject($encfac);
    }
}
