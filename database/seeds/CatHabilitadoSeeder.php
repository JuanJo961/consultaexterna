<?php

use Illuminate\Database\Seeder;

class CatHabilitadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'en proceso',
            'activado',
            'suspendido',
        ];
        for($i=0; $i<count($data);$i++){
            $habilitar = new Habilitar();
            $habilitar->nombre = $data[$i];
            $habilitar->save();
        }
    }
}
