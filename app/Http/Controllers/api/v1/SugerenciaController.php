<?php

namespace App\Http\Controllers\api\v1;

use App\Models\Sugerencia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Sugerencia\SugerenciaCollection;
use App\Http\Requests\Suferencia\SugerenciaCreateRequest;

class SugerenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new SugerenciaCollection(
            Sugerencia::select([
                'id',
                'sugerencia',
                'created_at',
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
    public function store(SugerenciaCreateRequest $request)
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
