<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornecedores extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'telefone', 'produto'];
    public function post() {
        return $this->hasMany('App\Produto', 'id');
    }
}
