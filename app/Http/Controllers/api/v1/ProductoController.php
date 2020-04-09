<?php

namespace App\Http\Controllers\api\v1;

use App\Models\Producto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Producto\ProductoCollection;
use App\Http\Requests\Producto\ProductoCreateRequest;
use App\Http\Requests\Producto\ProductoUpdateRequest;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new ProductoCollection(
            Producto::select([
                'id',
                'nombre',
                'stock',
                'precio'
            ])->paginate()
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductoCreateRequest $request)
    {
        $pro = new Producto($request->all());
        return $this->saveObject($pro);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pro = Producto::findOrFail($id);
        return $this->showResponse($pro);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductoUpdateRequest $request, $id)
    {
        $pro = Producto::findOrFail($id);
        return $this->updateObject($pro, $request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pro = Producto::findOrFail($id);
        return $this->deleteObject($pro);
    }
}
