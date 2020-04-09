<?php

namespace App\Http\Controllers\api\v1;

use App\Models\Rol;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Rol\RolCollection;
use App\Http\Requests\Rol\RolCreateRequest;
use App\Http\Requests\Rol\RolUpdateRequest;

class RolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new RolCollection(
            Rol::select([
                'id',
                'nombre',
                'created_at'
            ])->paginate()
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RolCreateRequest $request)
    {
        $rol = new Rol($request->all());
        return $this->saveObject($rol);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rol = Rol::findOrFail($id);
        return $this->showResponse($rol);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RolUpdateRequest $request, $id)
    {
        $rol = Rol::findOrFail($id);
        return $this->updateObject($rol, $request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rol = Rol::findOrFail($id);
        return $this->deleteObject($rol);
    }
}
