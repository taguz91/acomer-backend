<?php

namespace App\Http\Controllers\api\v1;

use App\Models\Plato;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Plato\PlatoCollection;
use App\Http\Requests\Plato\PlatoCreateRequest;
use App\Http\Requests\Plato\PlatoUpdateRequest;

class PlatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new PlatoCollection(
            Plato::select([
                'id_restaurante',
                'nombre',
                'precio',
                'ingredientes',
                'url_imagen'
            ])->with('restaurante:id,nombre_comercial')
            ->paginate()
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PlatoCreateRequest $request)
    {
        $pla = new Plato($request->all());
        return $this->saveObject($pla);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pla = Plato::findOrFail($id);
        return $this->showResponse($pla);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PlatoUpdateRequest $request, $id)
    {
        $pla = Plato::findOrFail($id);
        return $this->updateObject($pla, $request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pla = Plato::findOrFail($id);
        return $this->deleteObject($pla);
    }

    public function restaurante($id) {
        return new PlatoCollection(
            Plato::select([
                'id_restaurante',
                'nombre',
                'precio',
                'ingredientes',
                'url_imagen'
            ])->where('id_restaurante', '=', $id)
            ->paginate()
        );
    }
}