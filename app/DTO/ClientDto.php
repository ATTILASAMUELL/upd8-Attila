<?php

namespace App\DTO;

use Illuminate\Support\Arr;
use Illuminate\Support\Collection;


class ClientDTO
{
    public readonly string $nome;
     
    public readonly string $cpf;
 
    public readonly string $dataDeNascimento;
 
    public readonly string $sexo;

    public readonly string $endereco;

    public readonly string $estado;

    public readonly string $cidade;
 
     
    public function __construct(public readonly array $patientData)
    {
        $this->nome = Arr::get($patientData, 'nome');
        $this->cpf =  Arr::get($patientData, 'cpf');
        $this->dataDeNascimento =  Arr::get($patientData, 'dataDeNascimento');
        $this->sexo =  Arr::get($patientData, 'sexo');
        $this->endereco =  Arr::get($patientData, 'endereco');
        $this->estado =  Arr::get($patientData, 'estado');
        $this->cidade =  Arr::get($patientData, 'cidade');
    }

    public function clientDto():array
    {
        return [
            "nome" => $this->nome,
            "cpf" => $this->cpf,
            "dataDeNascimento"=> $this->dataDeNascimento,
            "sexo"=> $this->sexo,
            "endereco" => $this->endereco,
            "estado"=> $this->estado,
            "cidade" => $this->cidade
        ];
    }
}
