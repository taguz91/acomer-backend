<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pedido;
use App\Http\Requests\Pedido\PedidoCreateRequest;
use App\Http\Requests\Pedido\PedidoUpdateRequest;
use App\Http\Resources\Pedido\PedidoCollection;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new PedidoCollection(
            Pedido::select([
                'id',
                'id_restaurante',
                'id_empleado',
                'id_mesa',
                'platos',
                'notas',
            ])->with('mesa:id,numero')
            ->with('empleado:id,identificacion,nombre')
            ->paginate()

        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PedidoCreateRequest $request)
    {
        $pedido = new Pedido($request->all());
        return $this->saveObject($pedido);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pedido = Pedido::findOrFail($id);
        return $this->showResponse($pedido);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PedidoUpdateRequest $request, $id)
    {
        $pedido = Pedido::findOrFail($id);
        return $this->updateObject($pedido, $request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pedido = Pedido::findOrFail($id);
        return $this->deleteObject($pedido);
    }

    public function restaurante($id) {
        

       return new PedidoCollection(
        Pedido::select([
            'id',
            'id_restaurante',
            'id_empleado',
            'id_mesa',
            'platos',
            'notas',
        ])->where('id_restaurante', '=', $id)
        ->where('id_restaurante', '=', $id)
        ->paginate()

    );
}
}
