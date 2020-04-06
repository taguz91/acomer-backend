<?php 

namespace App\Http\Resources; 

trait NewCollectionResponse {

  protected function newCollectionResponse($data) {
    return [
      'status' => 206,
      'data' => $data,
      'meta' => [
        'total_resultados' => $this->collection->count()
      ]
    ];
  }

}