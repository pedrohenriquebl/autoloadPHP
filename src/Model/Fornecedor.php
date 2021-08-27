<?php

namespace Autoload\Model;

//Essa classe é necessária para declararmos uma model do laravel (eloquent)
use Illuminate\Database\Eloquent\Model;

//Definindo o nome da nossa model e extendendo a classe obrigatória do banco de dados do laravel
class Fornecedor extends Model{

    // Definindo o nome da tabela que é relacionada a essa model no banco de dados
    protected $table = "fornecedores";

    // Definindo quais campos queremos preencher nessa model a partir do banco
    protected $fillable = [
        'nome', 'email'
    ];

}