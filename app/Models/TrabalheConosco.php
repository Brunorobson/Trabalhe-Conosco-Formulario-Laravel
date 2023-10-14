<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrabalheConosco extends Model
{
    use HasFactory;
    protected $table = 'trabalhe_conosco';
    protected $fillable = [
        'nome_completo',
        'email',
        'telefone',
        'carreiras',
        'habilidades',
        'momento_profissional',
        'cidade_residencia',
        'sobre',
    ];
}
