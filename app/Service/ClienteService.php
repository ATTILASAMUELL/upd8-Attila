<?php

namespace App\Service;
use App\DTO\ClientDTO;
use App\Models\Client;
use Exception;

class ClienteService
{
    public function create(ClientDTO $clienteDTO):bool|Client
    {
        try {
            $client = new Client();
            
            $create = $client->create($clienteDTO->clientDto());

            if($create->id) {
                return $create;
            }
            
            return false;
        } catch (Exception $e) {
            return false;
        }
    }
}
