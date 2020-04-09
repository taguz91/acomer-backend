<?php

namespace App\Http\Controllers\api\v1;

use App\Models\UrlBD;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Url\UrlCollection;
use App\Http\Requests\Url\UrlCreateRequest;
use App\Http\Requests\Url\UrlUpdateRequest;

class UrlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new UrlCollection(
            UrlBD::select([
                'id',
                'plataforma',
                'url',
                'permisos'
            ])->paginate()
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UrlCreateRequest $request)
    {
        $url = new UrlBD($request->all());
        return $this->saveObject($url);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $url = UrlBD::findOrFail($id);
        return $this->showResponse($url);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UrlUpdateRequest $request, $id)
    {
        $url = UrlBD::findOrFail($id);
        return $this->updateObject($url, $request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $url = UrlBD::findOrFail($id);
        return $this->deleteObject($url);
    }
}
