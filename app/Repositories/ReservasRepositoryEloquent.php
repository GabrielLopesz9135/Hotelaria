<?php

namespace App\Repositories;

use App\Models\Reserva;

class ReservasRepositoryEloquent implements ReservasRepositoryInterface
{

    private $model;

    public function __construct(Reserva $data)
    {
        $this->model = $data;
    }

    public function show()
    {
        //Recuperar Todas as Reservas
        return $this->model->all();
    }

    public function showByCliente($idCliente)
    {
        //Consulta comparando id_cliente com o Banco de Dados
        return $this->model->where('cliente_id', $idCliente)->get();
    }
}