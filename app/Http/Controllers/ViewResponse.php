<?php 

namespace App\Http\Controllers;

trait ViewResponse {

  public function showResponse($object) {
    // Siempre ocultamos la fecha que fue eliminado 
    $object->setHidden([
      'deleted_at'
    ]);

    return [
      'status' => 200,
      'data' => $object
    ];
  }

  public function showQuery($res) {
    if (is_null($res)) {
      return [
        'status' => 400,
        'data' => [],
        'mensaje' => 'No obtuvimos resultados.'
      ];
    }
    return [
      'status' => 200,
      'data' => $res
    ];
  }

}