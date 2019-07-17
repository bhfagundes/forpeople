<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionarios extends Model
{
    protected $fillable = ['nome', 'endereco','cidade','estado'];
}
