<?php

namespace App\Http\Controllers;

use App\Models\Reservas;
use App\Repositories\ReservasRepositoryInterface;
use Illuminate\Http\Request;

class ReservasController extends Controller
{
    private $interface;

    public function __construct(ReservasRepositoryInterface $interface)
    {
        $this->interface = $interface;   
    }

    //Mostrar Todas as Reservas
    public function show()
    {
        return $this->interface->show();
    }

    //Listar Reservas Relacionadas a Um Cliente
    public function showByCliente($idCliente)
    {
        return $this->interface->showByCliente($idCliente);
    }
}
