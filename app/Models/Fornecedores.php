<?php

namespace App\Models;

use App\Models\Produto;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornecedores extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'telefone', 'produto'];
    public function produto() {
        return $this->belongsTo(Produto::class);
    }
}
