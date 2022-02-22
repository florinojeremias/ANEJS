<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Membro extends Model
{
    //
    protected $fillable=[
        'nome_completo','nome_mae','nome_pai','genero','nacionalidade','estado_civil',
        'data_nascimento','numero_documento_identificacao','local_emissao','contacto',
        'endereco','cargo','profissao','estado','imagem_doc'
    ];

    public static  $rules=[
        'nome_completo'=>'required|string|max:255',
        'nome_mae'=>'required|string|max:100',
        'nome_pai'=>'required|string|max:100',
        'genero'=>'required|string|max:10',
        'nacionalidade'=>'required|string|max:20',
        'estado_civil'=>'required|string|max:15',
        'data_nascimento'=>'required|date',
        'numero_documento_identificacao'=>'string|max:15',
        'local_emissao'=>"string",
        'contacto'=>'required|string',
        'endereco'=>'string|max:30',
        'cargo'=>'string|max:30',
        'profissao'=>'string|max:40',
        'estado'=>'required|integer',
        'imagem_doc'=>'required|string'

        

    ];
}
