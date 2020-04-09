<?php

namespace App\Http\Controllers\api\v1;

use Illuminate\Http\Request;
use App\Models\Empleado;
use App\Http\Controllers\Controller;
use App\Http\Resources\Empleado\EmpleadoCollection;
use App\Http\Requests\Empleado\EmpleadoCreateRequest;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new EmpleadoCollection(
            Empleado::select([
                'id_restaurante',
                'id_usre',
                'apelluario',
                'nombido',
                'identificacion',
                'id_rol',
            ])->with('usuario:id,nombre,correo')
            //->with('restaurante:nombre_comercial')
            ->paginate()
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmpleadoCreateRequest $request)
    {
        $emp = new Empleado($request->all());
        return $this->saveObject($emp);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $emp = Empleado::findOrFail($id);
        return $this->showResponse($emp);
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
        $emp = Empleado::findOrFail($id);
        return $this->updateObject($emp, $request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $emp = Empleado::findOrFail($id);
        return $this->deleteObject($emp);
    }
}
