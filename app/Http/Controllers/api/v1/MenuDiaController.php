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
        return MenuDia::paginate(30); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MenuDiaCreateRequest $request)
    {
        $menudia = new MenuDia($request->all());
        return $this->saveObject($menudia);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $menudia = MenuDia::findOrFail($id);
        return $this->showResponse($menudia);
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
        $menudia = MenuDia::findOrFail($id);
        return $this->updateObject($menudia, $request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menudia = MenuDia::findOrFail($id);
        return $this->deleteObject($menudia);
    }
}
