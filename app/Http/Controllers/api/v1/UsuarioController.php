<?php

namespace App\Http\Controllers\api\v1;

use App\Models\Usuario;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Usuario\UsuarioCollection;
use App\Http\Requests\Usuario\UsuarioCreateRequest;
use App\Http\Requests\Usuario\UsuarioUpdateRequest;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new UsuarioCollection(
            Usuario::select([
                'id',
                'nombre',
                'clave',
                'correo',
                'tipo_usuario',
                'ultimo_login',
                'ultimo_cambio_clave',
                'intentos_login',
                'numero_logins',
            ])->paginate()
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsuarioCreateRequest $request)
    {
        $usu = new Usuario($request->all());
        return $this->saveObject($usu);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usu = Usuario::findOrFail($id);
        return $this->showResponse($usu);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UsuarioUpdateRequest $request, $id)
    {
        $usu = Usuario::findOrFail($id);
        return $this->updateObject($usu, $request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usu = Usuario::findOrFail($id);
        return $this->deleteObject($usu);
    }
}
