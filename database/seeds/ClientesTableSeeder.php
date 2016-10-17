<?php

use App\Cliente;
use Illuminate\Database\Seeder;

class ClientesTableSeeder extends Seeder
{

    public function run()
    {
        Cliente::truncate();

        factory('App\Cliente', 10)->create();
    }
}
