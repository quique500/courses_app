<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* crear un nuevo de registro de usuario y 99 mas de prueva  */
        User::create([
            'name'=> 'Enrique Solis Medina',
            'email'=> 'some500.q@gmail.com',
            'password'=>bcrypt('12341234')  // 'bcrypt' se utiliza para encriptar el campo password
        ]);

        /* aremos uso del factory por default para crear los datos de prueba */
        User::factory(99)->create();
    }
}
