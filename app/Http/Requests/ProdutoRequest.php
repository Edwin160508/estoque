<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProdutoRequest extends Request
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
            'nome' => 'required|min:3',
            'descricao' => 'required|max:255',
            'valor' => 'required|numeric',
            'quantidade' => 'required|numeric',
            'tamanho' => 'required|max:100'
        ];
    }

    public function messages(){
        return [/*campos vazios*/
            'required' => 'O campo :attribute é obrigatório!',
            /*regras de dados inválidos*/
            'valor.numeric' => 'O campo valor só aceita números!',
            'quantidade.numeric' => 'O campo quantidade só aceita números!'
            /*regras de tamanhos*/
            //'descricao.max' => ['numeric'=>'O campo descrição excedeu número :max de caracters.']
        ];
    }
}
