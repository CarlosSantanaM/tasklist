<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tasks extends Model
{
    protected $fillable = ['tarefa','descricao','data_entrega'];
}
