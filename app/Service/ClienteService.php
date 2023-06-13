<?php

namespace App\Service;
use App\DTO\ClientDTO;
use App\Models\Client;
use Exception;

class ClientService
{
    public function create(ClientDTO $clienteDTO):bool|Client
    {
        try {
            $client = new Client();
            $client->create($clienteDTO->clientDto());

            if(isset($client->id)) {
                return $client;
            }
            
            return false;
        } catch (Exception $e) {
            report($e);
            return false;
        }
    }
}
