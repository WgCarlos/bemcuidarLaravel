<?php

use Illuminate\Database\Seeder;
use App\User;
class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dados = [
        	'name'=>"Carlos",
        	'email'=>"admin@mail.com",
        	'password'=>bcrypt("9796"),
        	'birthday'=>"06/05/1995",
        	'fone'=>"81997659678",
        ];
        if(User::where('email','=',$dados['email'])->count()){
        	$usuario = User::where('email','=',$dados['email'])->first();
        	$usuario->update($dados);
        	echo "Usuario alterado";
        }else{
        	User::create($dados);
        	echo "Usuario criado";
        }
    }
}
