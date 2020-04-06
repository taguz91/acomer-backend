<?php 

namespace App\Http\Controllers;

trait ViewResponse {

  public function showReponse($object) {
    return [
      'status' => 200,
      'data' => $object
    ];
  }

}