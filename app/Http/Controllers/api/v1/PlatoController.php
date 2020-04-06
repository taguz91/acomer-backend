<?php

namespace App\Http\Controllers\api\v1;

use App\Models\Plato;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Plato\PlatoCreateRequest;

class PlatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function update(Request $request, $id)
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
}
