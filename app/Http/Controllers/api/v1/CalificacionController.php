<?php

namespace App\Http\Controllers\api\v1;

use App\Models\Calificacion;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Calificacion\CalificacionCollection;
use App\Http\Requests\Calificacion\CalificacionCreateRequest;
use App\Http\Requests\Calificacion\CalificacionUpdateRequest;

class CalificacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new CalificacionCollection(
            Calificacion::select([
                'id',
                'id_fk',
                'calificacion',
                'tipo_calificacion',
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
    public function store(CalificacionCreateRequest $request)
    {
        $calificacion = new Calificacion($request->all());
        return $this->saveObject($calificacion);
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $calificacion = Calificacion::findOrFail($id);
        return $this->showResponse($calificacion);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CalificacionUpdateRequest $request, $id)
    {
        $calificacion = Calificacion::findOrFail($id);
        return $this->updateObject($calificacion, $request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $calificacion = Calificacion::findOrFail($id);
        return $this->deleteObject($calificacion);
    }

    public function restaurante($id) {
            return new CalificacionCollection(
                Calificacion::select([
                    'id',
                    'id_fk',
                    'calificacion',
                    'tipo_calificacion',
                    'id_cliente'
                ])->where('id_restaurante', '=', $id)
                ->paginate()
            ); 
    }
}
