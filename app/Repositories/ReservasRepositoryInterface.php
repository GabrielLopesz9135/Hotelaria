<?php

namespace App\Repositories;

use App\Models\Reserva;

interface ReservasRepositoryInterface
{

    public function __construct(Reserva $data);

    public function show();
    public function showByCliente($idCliente);

}