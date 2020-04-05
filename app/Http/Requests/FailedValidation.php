<?php

namespace App\Http\Requests;

use Illuminate\Http\JsonResponse;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Exceptions\HttpResponseException;

trait FailedValidation {

  protected function failedValidation(Validator $validator){
    $errors = (new ValidationException($validator))->errors();
    throw new HttpResponseException(
        response()->json(
            [
                'status' => 400,
                'errores' => $errors
            ],
            JsonResponse::HTTP_UNPROCESSABLE_ENTITY
        )
    );
  }

}