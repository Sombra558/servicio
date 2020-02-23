<?php

use Illuminate\Database\Seeder;

class CarrerasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carreras')->insert([
            'id' => 1,
            'carrera' => 'Ingenieria en Sistemas',
        ]); 
    }
}
