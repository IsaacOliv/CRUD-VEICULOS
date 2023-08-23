<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VeiculosRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'modelo' => 'required|max:100',
            'dataAquisicao' =>'required',
            'placa' => 'required|max:15|unique:veiculos,placa',
            'acessibilidade_id' => 'required',
            ];
    }
    public function messages()
    {
        return [
            'modelo.required' => 'Necessario informar modelo.',
            'modelo.max' => 'Campo modelo deve ter no maximo 100 caracteres.',
            'dataAquisicao.required' => 'Necessario informar data de aquisição',
            'placa.required' => 'Necessario informar placa',
            'placa.max' => 'Campo placa deve ter no maixmo 15 caracteres',
            'placa.unique' => 'Placa ja cadastrada, insira uma placa diferente',
            'acessibilidade_id.required' => 'Necessario selecionar uma opção.',
        ];
    }
}
