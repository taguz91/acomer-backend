<?php 

namespace App\Http\Controllers;

trait SaveResponse {

  public function saveObject($object) {
    return [
      'status' => 201,
      'data' => $object,
      'guardado' => $object->save()
    ];
  }

  public function updateObject($object, $request) {
    $editado = $object->update($request->all());
    return [
      'status' => 200,
      'data' => $object,
      'editado' => $editado
    ];
  }

}