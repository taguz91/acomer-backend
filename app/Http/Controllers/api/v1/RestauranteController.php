<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Restaurante;
use App\Http\Requests\Restaurante\RestauranteCreateRequest;

class RestauranteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Restaurante::paginate(30); 
        // Solos los eliminados 
        // return Restaurante::onlyTrashed()->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RestauranteCreateRequest $request)

    {
        $restaurante = new Restaurante($request->all());
        $restaurante->inicio_suscripcion = date('Y-m-d H:m:s');
        $restaurante->ultimo_pago = date('Y-m-d H:m:s');
        $restaurante->fecha_proximo_pago = date('Y-m-d H:m:s');
        $guardado = $restaurante->save();
        return[
            'message'=>'Guardado',
            'data'=>$restaurante,
            'guardado'=>$guardado
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
        return Restaurante::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update( $request, $id)
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
        // $res = Restaurante::findOrFail($id);
        // return [
        //     'data' => $res,
        //     'eliminado' => $res->delete()
        // ];
        $res = Restaurante::withTrashed()->findOrFail($id);
        return [
            'data' => $res,
            'activado' => $res->restore()
        ];
    }
}
