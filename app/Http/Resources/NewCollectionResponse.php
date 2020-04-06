<?php 

namespace App\Http\Resources; 

trait NewCollectionResponse {

  protected function newReponseCollection($data) {
    return [
      'status' => 200,
      'data' => $data,
      'meta' => [
        'total_resultados' => $this->collection->count()
      ]
    ];
  }

}