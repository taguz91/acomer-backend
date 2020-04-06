<?php 

namespace App\Http\Controllers;

trait DeleteResponse {

  public function deleteObject($object) {
    return [
      'status' => 200,
      'data' => $object,
      'eliminado' => $object->delete()
    ];
  }

  public function restoreObject($object) {
    return [
      'status' => 200,
      'data' => $object,
      'restore' => $object->restore()
    ];
  }

}