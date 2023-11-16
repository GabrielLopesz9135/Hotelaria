<?php

namespace App\Http\Controllers;

use App\Repositories\QuartosRepositoryInterface;

class QuartosController extends Controller
{
    private $interface;

    public function __construct(QuartosRepositoryInterface $interface)
    {
      $this->interface = $interface;  
    }
    
    //Listar Todos os Quartos Disponiveis
    public function listarDisponiveis()
    {
        return $this->interface->listarDisponiveis();   
    }

    //Listar Quartos com Reserva em Data Passada Por Parametro
    public function quartosReservadosNaData($data)
    {
        return $this->interface->quartosReservadosNaData($data);
    }

}
