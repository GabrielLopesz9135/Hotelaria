<?php

namespace App\Repositories;

use App\Models\Quarto;

interface QuartosRepositoryInterface
{

    public function __construct(Quarto $data);

    public function listarDisponiveis();
    public function quartosReservadosNaData($data);

}