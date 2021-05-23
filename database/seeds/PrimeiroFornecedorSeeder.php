<?php

use Illuminate\Database\Seeder;
use App\User;

class PrimeiroClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dados = [ 
            'name'=>'ana',
            'email'=>'ana@mail.com',
            'password'=>bcrypt('ana123'), //bcrypt criptografa a senha
        ];

        if(User::where('email','=',$dados['email'])->count()){
            $usuario = User::where('email','=',$dados['email'])->first(); //metodo firt tras apenas um registro encontrado (o primeiro)
            $usuario->update($dados);
            echo "Usuario Alterado!";
        }else{
            User::create($dados);
            echo "Usuario Criado!";
        }
    }
}
