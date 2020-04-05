<?php

namespace App\Http\Requests\Pedido;

use App\Http\Requests\FailedValidation;
use Illuminate\Foundation\Http\FormRequest;

class PedidoCreateRequest extends FormRequest
{
    use FailedValidation;
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
            'id_empleado' => 'required',
            'id_mesa' => 'required',
            'platos'=> 'required',
            'notas'  => 'required|max=100|min=20'
        ];
    }

    public function attributes()
    {
        return [
            'notas' => 'Notas Pedido',
        ];
    }

    public function filters(){
        return [
            'notas' => 'trim'
        ];
    }

}
