<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quarto extends Model
{
    protected $table = 'quartos';

    protected $fillable = [
        'numero',
        'capacidade',
        'preco_diaria',
        'disponivel'
    ];

    public function reserva()
    {
        return $this->hasMany(Reserva::class);
    }
}
