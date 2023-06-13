<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clients')->insert([
            'nome' => 'ATTILA TESTE',
            'cpf' => '04123453445',
            'dataDeNacimento' => '14081995',
            'sexo' => 'Masculino',
            'endereco' => 'QN CJ G LT03/04 APT 808',
            'estado' => 'Distrito Federal',
            'cidade' => 'Samambaia'
        ]);
    }
}
