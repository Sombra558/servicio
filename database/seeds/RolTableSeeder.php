<?php

use Illuminate\Database\Seeder;

class RolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        DB::table('rols')->insert([
            'rol_id' => 1,
            'nombre_rol' => 'Administrador',
        ]);  
        DB::table('rols')->insert([
            'rol_id' => 2,
            'nombre_rol' => 'Docente',
        ]); 
        DB::table('rols')->insert([
            'rol_id' => 3,
            'nombre_rol' => 'Estudiante',
        ]);     
    }
}
