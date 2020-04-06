<?php

namespace App\Http\Controllers\api\v1;

use App\Models\Reserva;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Reserva\ReservaCollection;
use App\Http\Requests\Reserva\ReservaCreateRequest;

class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new ReservaCollection(
            Reserva::select([
                'id',
                'fecha_reserva',
                'numero_personas',
                'total',
                'id_cliente'
            ])->with('cliente:id,nombre,apellido,identificacion,telefono')
            ->paginate()
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReservaCreateRequest $request)
    {
        $res = Reserva::findOrFail($request->all());
        return $this->saveObject($res);
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
        $res = Reserva::findOrFail($id);
        return $this->updateObject($res, $request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $res = Reserva::findOrFail($id);
        return $this->deleteObject($res);
    }
}
