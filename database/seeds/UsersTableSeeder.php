<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('users')->insert([
                'name' => 'Administrador',
                'email' => 'admin'.'@test.com',
                'password' => bcrypt('secret'),
                'is_admin' => 1,
                'rol' => 1,
            ]); 
            DB::table('users')->insert([
                'name' => 'Profesor eke',
                'email' => 'eke'.'@test.com',
                'password' => bcrypt('secret'),
                'is_admin' => 0,
                'rol' => 2,
            ]);      
    }
}
