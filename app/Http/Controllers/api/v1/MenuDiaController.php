<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MenuDia;
use App\Http\Requests\MenuDia\MenuDiaCreateRequest;

class MenuDiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return MenuDia::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MenuDiaCreateRequest $request)
    {
        $menu_dia = new MenuDia($request->all());
        $menu_dia->fecha_inicio = date('Y-m-d H:m:s');
        $menu_dia->fecha_fin = date('Y-m-d H:m:s');
        $guardado = $menu_dia->save();
        return[
            'message'=>'Guardado',
            'data'=>$menu_dia,
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
        //
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
        $res = MenuDia::withTrashed()->findOrFail($id);
        return [
            'data' => $res,
            'activado' => $res->restore()
        ];
    }
}
