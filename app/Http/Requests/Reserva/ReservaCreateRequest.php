<?php

namespace App\Http\Requests\Reserva;

use Illuminate\Http\JsonResponse;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Exceptions\HttpResponseException;

class ReservaCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id_mesa' => 'required|integer',
            'fecha_reserva' => 'required|date_format:Y-m-d H:m:s',
            'numero_personas' => 'required|integer',
            'platos' => 'required|json',
            'total' => 'required|between:0,99.9'
        ];
    }

    public function messages() {
        return [
            'id_mesa.required' => 'Necesitamos el id de la mesa en la que se hara la reserva.',
            'id_mesa.integer' => 'El id de la mesa debe ser un entero.',
            'fecha_reserva.required' => 'La fecha de reserva es obligatoria.',
            'fecha_reserva.date_format' => 'La fecha debe tener el siguiente formato, yyyy-mm-dd hh:mm:ss',
            'numero_personas.required' => 'El número de personas es obligatorio.',
            'numero_personas.integer' => 'El número de personas debe ser un entero.',
            'platos.required' => 'Los platos son un campo obligatorio.',
            'platos.json' => 'El campo platos debe ser un json valido.',
            'total.required' => 'El total es obligatorio.',
            'total.between' => 'El total debe estar entre el rango de: :between.'
        ];
    }

    protected function failedValidation(Validator $validator){
        $errors = (new ValidationException($validator))->errors();
        throw new HttpResponseException(
            response()->json(
                [
                    'errores' => $errors
                ],
                JsonResponse::HTTP_UNPROCESSABLE_ENTITY
            )
        );
    }

}
