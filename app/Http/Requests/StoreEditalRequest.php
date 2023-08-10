<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEditalRequest extends FormRequest
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
            "nome"                          => ['required', 'string', 'min:5', 'max:255'],
            "descricao"                     => ['required', 'string', 'min:5', 'max:1000'],
            "cota_doutor"                   => ['required", "boolean'],
            "users_criador_id"              => ['required", "integer", "numeric'],
            "tipo_editais_id"               => ['required", "integer", "numeric'],
            "natureza_editais_id"           => ['required", "integer", "numeric'],
            "unidade_administrativas_id"    => ['required", "integer", "numeric'],
            "nome_data.*"                   => ['required', 'string', 'min:5', 'max:255'],
            "data_atividade.*"              => ['required', 'date'],
            "titulo_campo.*"                => ['required', 'string', 'min:5', 'max:255'],
            "campo_obrigatorio.*"           => ['required', 'boolean'],
            "ordem_campo.*"                 => ['required', 'integer', 'numeric'],
            "tipo_campo_editais_id.*"       => ['required', 'integer', 'numeric'],
            "nome_opcao.*"                  => ['required', 'string', 'min:5', 'max:255'],
            "campo_editais_id.*"            => ['required', 'integer', 'numeric']
        ];
    }

    public function messages()
    {
        return [
            'nome.required'                         => "O nome é obrigatório",
            'nome.string'                           => 'O nome não é do tipo válido',
            'nome.min'                              => "O nome deve conter ao menos 5 caracteres",
            'nome.max'                              => "O nome deve conter no máximo 255 caracteres",
            'descricao.required'                    => "A descrição é obrigatório",
            'descricao.text'                        => 'A descrição não é do tipo válido',
            'descricao.min'                         => "A descrição deve conter ao menos 5 caracteres",
            'descricao.max'                         => "A descrição deve conter no máximo 255 caracteres",
            'cota_doutor.required'                  => "A cota doutor é obrigatório",
            'cota_doutor.boolean'                   => 'A cota doutor não é do tipo válido',
            'users_criador_id.required'             => "O criador do edital é obrigatório",
            'users_criador_id.numeric'              => "O criador do edital não é do tipo válido",
            'users_criador_id.integer'              => "O criador do edital não é do tipo válido",
            'tipo_editais_id.required'              => "O tipo do edital é obrigatório",
            'tipo_editais_id.numeric'               => "O tipo do edital não é do tipo válido",
            'tipo_editais_id.integer'               => "O tipo do edital não é do tipo válido",
            'natureza_editais_id.required'          => "A natureza do edital é obrigatória",
            'natureza_editais_id.numeric'           => "A natureza do edital não é do tipo válido",
            'natureza_editais_id.integer'           => "A natureza do edital não é do tipo válido",
            'unidade_administrativas_id.required'   => "A natureza do edital é obrigatória",
            'unidade_administrativas_id.numeric'    => "A natureza do edital não é do tipo válido",
            'unidade_administrativas_id.integer'    => "A natureza do edital não é do tipo válido",
            'nome_data.*.required'                  => "O nome da data é obrigatório",
            'nome_data.*.string'                    => "O nome da data não é do tipo válido",
            'nome_data.*.min'                       => "O nome da data deve conter ao menos 5 caracteres",
            'nome_data.*.max'                       => "O nome da data deve conter no máximo 255 caracteres",
            'data_atividade.*.required'             => "A data da atividade é obrigatória",
            'data_atividade.*.date'                 => "A data da atividade não é do tipo válido",
            'data_atividade.*.date'                 => "A data da atividade não é do tipo válido",
            'nome_opcao.required'                   => "O nome da opção é obrigatório",
            'nome_opcao.string'                     => 'O nome da opção é do tipo válido',
            'nome_opcao.min'                        => "O nome da opção deve conter ao menos 5 caracteres",
            'nome_opcao.max'                        => "O nome da opção deve conter no máximo 255 caracteres"
        ];
    }
}
