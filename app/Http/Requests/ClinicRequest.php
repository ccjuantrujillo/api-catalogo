<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class ClinicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'codigo' => 'required|string|min:1|max:5',
            'codigoUbigeo' => 'required|string',
            'nombre' => 'required|string|min:1|max:100',
            'ruc' => 'required|string|min:1|max:11',
            'telefono' => 'string|min:1|max:255|nullable',
            // 'email' => 'string|email:rfc,dns|min:1|max:225',
            'email' => 'string|email|min:1|max:225|nullable',
            'direccion' => 'string|min:1|max:225|nullable',
            //'tipo' => 'required|string|min:1|max:10',
            'acceso' => 'string',
            'entVinculada' => 'string',
            'ipress' => 'string|min:1|max:7|nullable',
            'renipress' => 'string|min:1|max:8|nullable',
            'estado' => 'required|boolean',
            'zona' => 'string|min:1|max:50|nullable',
            'igv' => 'required|string|min:1|max:4',
            'sede' => 'string|min:1|max:5',
            'ubicacion' => 'string|min:1|max:1',

        ];
    }

    public function failedValidation(Validator $validator)
    {

        throw new HttpResponseException(
            response()->json(
                [
                    'status' => false,
                    'message' => 'Validation errors',
                    'errors' => $validator->errors()
                ],
                400
            )
        );
    }

    public function messages()
    {
        return [
            //
            'codigo.required' => 'Código es requerido',
            'redMedicaId.required' => 'Red Médica Id es requerido',
            'codigoUbigeo.required' => 'Ubigeo Codigo es requerido',
            'nombre.required' => 'Nombre es requerido',
            'ruc.required' => 'Ruc es requerido',
           // 'tipo.required' => 'Tipo es requerido',
            'acceso.required' => 'Acceso es requerido',
            'estado.required' => 'Estado es requerido',
            'igv.required' => 'Igv es requerido',
            'sede.required' => 'Sede es requerido',
            'ubicacion.required' => 'Ubicación es requerido',

            // --
            'codigo.string' => 'Código debe ser una cadena',
            'nombre.string' => 'Nombre debe ser una cadena',
            'ruc.string' => 'Ruc debe ser una cadena',
            'telefono.string' => 'teléfono debe ser una cadena',
            'email.string' => 'Email debe ser una cadena',
            'direccion.string' => 'Dirección debe ser una cadena',
            //'tipo.string' => 'Tipo debe ser una cadena',
            'acceso.string' => 'Acceso debe ser una cadena',
            'entVinculada.string' => 'Ent. Vinculada debe ser una cadena',
            'ipress.string' => 'Ipress debe ser una cadena',
            'renipress.string' => 'Renipress debe ser una cadena',
            'estado.string' => 'Estado debe ser una cadena',
            'zona.string' => 'Zona debe ser una cadena',
            'igv.string' => 'Igv debe ser una cadena',
            'sede.string' => 'Sede debe ser una cadena',
            'ubicacion.string' => 'Ubicación debe ser una cadena',

            // --
            'codigo.max' => 'Código max. 5 caracteres',
            'nombre.max' => 'Nombre max. 100 caracteres',
            'ruc.max' => 'Ruc max. 11 caracteres',
            'telefono.max' => 'Teléfono max. 225 caracteres',
            'email.max' => 'Email max. 225 caracteres',
            'direccion.max' => 'Dirección max. 225 caracteres',
            //'tipo.max' => 'Tipo max. 10 caracteres',
            'ipress.max' => 'Ipress max. 7 caracteres',
            'renipress.max' => 'Renipress max. 8 caracteres',
            'zona.max' => 'Zona max. 50 caracteres',
            'igv.max' => 'Igv max. 4 caracteres',
            'sede.max' => 'Sede max. 5 caracteres',
            'ubicacion.max' => 'Ubicación max. 1 caracteres',

            // --
            'codigo.min' => 'Código min. 1 caracteres',
            'nombre.min' => 'Nombre min. 1 caracteres',
            'ruc.min' => 'Ruc min. 1 caracteres',
            'telefono.min' => 'Teléfono min. 1 caracteres',
            'email.min' => 'Email min. 1 caracteres',
            'direccion.min' => 'Dirección min. 1 caracteres',
           // 'tipo.min' => 'Tipo min. 1 caracteres',
            'ipress.min' => 'Ipress min. 1 caracteres',
            'renipress.min' => 'Renipress min. 1 caracteres',
            'zona.min' => 'Zona min. 1 caracteres',
            'igv.min' => 'Igv min. 1 caracteres',
            'sede.min' => 'Sede min. 1 caracteres',
            'ubicacion.min' => 'Ubicación min. 1 caracteres',

            // --
            'redMedicaId.integer' => 'Red Médica Id debe ser un entero',
            'codigoUbigeo.string' => 'Ubigeo Codigo debe ser cadena',

            // --
            'acceso.in' => 'Acceso solo incluye 0 o 1',
            'entVinculada.in' => 'Ent. Vinculada solo incluye 0 o 1',
            'estado.in' => 'Estado solo incluye 0 o 1',

            // --
            'email.email' => 'Email no tiene el formato correcto',
        ];
    }
}
