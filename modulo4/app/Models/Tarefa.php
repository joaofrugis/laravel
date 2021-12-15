<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    use HasFactory;
    // Caso sua tabela tiver o nome diferente do model. \/
    // protected $table = 'tarefas';
    
    // Caso o nome da chave primária seja diferente de ID 
    // protected $primaryKey = 'id'
    
    // Caso o campo não seja declarado como auto_incremento no banco.
    // public $incrementing = true;
    
    // Caso o tipo da chave primária não seja int
    // protected $keyType = 'string';

    // Eloquente assume que existem esses 2 campos created_at e updated_at (ele sempre tenta inserir ou alterar) Para remover essa atualização/inserção
    // public $timestamps = false;

    // Para alterar o nome do campo created_at
    // const CREATED_AT = 'criado_em';

    // Para alterar o nome do campo updated_at
    // const UPDATED_AT = 'atualizado_em';

    public $timestamps = false;

    protected $fillable = ['titulo'];

}
