<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reporte;
use App\Http\Requests\Reporte\ReporteCreateRequest;


class ReporteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Reporte::all(); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     
    public function store(ReporteCreateRequest $request)
    {
        $reporte = new Reporte($request->all());
        $reporte->fecha = date('Y-m-d H:m:s');
        $guardado = $reporte->save();
        
        return[
            'message'=>'Guardado',
            'data'=>$reporte,
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
        return Reporte::find($id);
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
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $res = Reporte::withTrashed()->findOrFail($id);
        return [
            'data' => $res,
            'activado' => $res->restore()
        ];
    }
}
