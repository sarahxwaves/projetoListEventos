<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsuarioSeeder::class);
        $this->call(PrimeiroClienteSeeder::class);
        $this->call(PrimeiroFornecedorSeeder::class);
        //DB::table('clientes')->insert([
        //]);
    }
}
