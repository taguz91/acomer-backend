<?php 

namespace App\Http\Controllers;

trait ViewResponse {

  public function showReponse($object) {
    // Siempre ocultamos la fecha que fue eliminado 
    $object->setHidden([
      'deleted_at'
    ]);

    return [
      'status' => 200,
      'data' => $object
    ];
  }

}