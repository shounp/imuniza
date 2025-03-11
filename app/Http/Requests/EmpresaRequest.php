<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmpresaRequest extends FormRequest
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
            'nome_empresa' => [
                'required', 'min:3', 'max:255'
            ],
            'cnpj' => [
                'required', 'string', 'digits:14'
            ],
            'telefone' => [
                'required', 'string', 'min:10', 'max:11'
            ],
            'email' => [
                'required', 'email', 'max:255'
            ],
            'endereco_id' => [
                'required', 'integer'
            ],
        ];
    }
    public function messages()
    {
        return [
            'nome_empresa.required' => 'O campo nome da empresa é obrigatório.',
            'nome_empresa.min' => 'O nome da empresa deve ter no mínimo 3 caracteres.',
            'nome_empresa.max' => 'O nome da empresa deve ter no máximo 255 caracteres.',

            'cnpj.required' => 'O CNPJ é obrigatório.',
            'cnpj.digits' => 'O CNPJ deve ter 14 dígitos.',
            'cnpj.string' => 'O CNPJ deve ser uma string válida.',

            'telefone.required' => 'O telefone é obrigatório.',
            'telefone.min' => 'O telefone deve ter no mínimo 10 caracteres.',
            'telefone.max' => 'O telefone deve ter no máximo 11 caracteres.',
            'telefone.string' => 'O telefone deve ser uma string válida.',

            'email.required' => 'O campo email é obrigatório.',
            'email.email' => 'O email deve ser um endereço de email válido.',
            'email.max' => 'O email deve ter no máximo 255 caracteres.',

            'endereco_id.required' => 'O endereço é obrigatório.',
            'endereco_id.integer' => 'O endereço deve ser um número inteiro válido.',
        ];
    }
}
