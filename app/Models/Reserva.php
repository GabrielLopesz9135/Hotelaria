<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    protected $table = 'reservas';

    protected $fillable = [
        'id',
        'data_checkin',
        'data_checkout',
        'quarto_id',
        'cliente_id'
    ];

    public function quarto()
    {
        return $this->belongsTo(Quartos::class);
    }
}
