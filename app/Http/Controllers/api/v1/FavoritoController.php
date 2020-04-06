<?php

namespace App\Http\Controllers\api\v1;

use App\Models\Favorito;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Favorito\FavoritoCreateRequest;

class FavoritoController extends Controller
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
    public function store(FavoritoCreateRequest $request)
    {
        $fav = new Favorito($request->all());
        return $this->saveObject($fav);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fav = Favorito::findOrFail($id);
        return $this->showResponse($fav);
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
        $fav = Favorito::findOrFail($id);
        return $this->updateObject($fav, $request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fav = Favorito::findOrFail($id);
        return $this->deleteObject($fav);
    }
}
