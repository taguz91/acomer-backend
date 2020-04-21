<?php

namespace App\Http\Controllers\api\v1;

use App\Models\Restaurante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Resources\Restaurante\RestauranteCollection;
use App\Http\Requests\Restaurante\RestauranteCreateRequest;
use App\Http\Requests\Restaurante\RestauranteUpdateRequest;

class RestauranteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return Restaurante::paginate(30); 
        // Solos los eliminados 
        // return Restaurante::onlyTrashed()->get();
        return new RestauranteCollection(
            Restaurante::select([
                'id',
                'nombre_comercial',
                'nombre_fiscal',
                'inicio_suscripcion',
                'ultimo_pago',
                'fecha_proximo_pago',
                'id_usuario'
            ])->with('usuario:id,nombre,correo')
            ->paginate()
        );
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
        return $this->saveObject($restaurante);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $restaurante = Restaurante::findOrFail($id);
        return $this->showResponse($restaurante);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RestauranteUpdateRequest $request, $id)
    {
        $restaurante = Restaurante::findOrFail($id);
        return $this->updateObject($restaurante, $request);
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
        $restaurante = Restaurante::findOrFail($id);
        return $this->deleteObject($restaurante);
    }

    public function reporte() {
        $res = DB::select(DB::raw('
            SELECT 
            count(inicio_suscripcion) as num_suscripciones, 
            inicio_suscripcion 
            FROM restaurantes 
            GROUP BY inicio_suscripcion
        '));
        return [
            'status' => 200,
            'total' => sizeof($res),
            'data' => $res,
        ];
    }

}
