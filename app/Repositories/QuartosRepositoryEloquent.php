<?php

namespace App\Repositories;

use App\Models\Quarto;
use Carbon\Carbon;

class QuartosRepositoryEloquent implements QuartosRepositoryInterface
{

    private $model;

    public function __construct(Quarto $data)
    {
        $this->model = $data;
    }

    public function listarDisponiveis()
    {
        //Recuperar Todas as Reservas que Possuem 'true' no campo 'disponivel'
        return $this->model->where('disponivel', true)->get();
    }

    public function quartosReservadosNaData($data)
    {
        // Converter a data para o formato correto usando Carbon
        $dataFormatada = Carbon::parse($data)->toDateString();

        // Consulta para obter quartos reservados na data especificada
        $quartosReservados = Quarto::whereHas('reserva', function ($query) use ($dataFormatada) {
            $query->where('data_checkin', '<=', $dataFormatada)
                  ->where('data_checkout', '>=', $dataFormatada);
        })->get();

        return $quartosReservados;
    }
}