<?php

namespace App\Http\Controllers\api\v1;

use App\Models\Combo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Combo\ComboCollection;
use App\Http\Requests\Combo\ComboCreateRequest;
use App\Http\Requests\Combo\ComboUpdateRequest;

class ComboController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new ComboCollection(
            Combo::select([
                'id',
                'nombre',
                'platos',
                'precio_final',
                'extra'
            ])->paginate()
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ComboCreateRequest $request)
    {
        $com = new Combo($request->all());
        return $this->saveObject($com);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $com = Combo::findOrFail($id);
        return $this->showResponse($com);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ComboUpdateRequest $request, $id)
    {
        $com = Combo::findOrFail($id);
        return $this->updateObject($com, $request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $com = Combo::findOrFail($id);
        return $this->deleteObject($com);
    }
}
