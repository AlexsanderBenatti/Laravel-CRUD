<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

<<<<<<< HEAD
    protected $fillable = ['nome', 'valor', 'estoque', 'fornecedores_id'];
    public function fornecedores() {
        return $this->hasOne(Fornecedores::class);
    }
=======
    protected $fillable = ['nome', 'valor', 'estoque', 'fornecedor_id'];
    // public function receive() {
    //     return $this->belongsTo('App\Fornecedor', 'foreign_key');
    // }
>>>>>>> f3762bcdb27457871980dc1151d9351a4449f528
}
