<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PacientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pacientes')->insert([
            [
            'nombres' => 'José',
            'apellidos' => 'Perez',
            'edad' => '28',
            'sexo' => 'masculino',
            'ci' => '10628182',
            'tipo_sangre' => 'OR+',
            'correo' => 'correo765@gmail.com',
            'telefono'=> '7898445',
            'direccion'=>'Calle Comercio'
        ],
        [
            'nombres' => 'María',
            'apellidos' => 'Perez',
            'edad' => '23',
            'sexo' => 'Femenino',
            'ci' => '10624382',
            'tipo_sangre' => 'OR+',
            'correo' => 'correo890@gmail.com',
            'telefono'=> '7645889',
            'direccion'=>'Av Libertadores'
        ],
        [
            'nombres' => 'Eduardo José',
            'apellidos' => 'García ',
            'edad' => '33',
            'sexo' => 'Masculino',
            'ci' => '10222382',
            'tipo_sangre' => 'AB-',
            'correo' => 'correo123@gmail.com',
            'telefono'=> '7645889',
            'direccion'=>'Av Libertadores'
        ]
        ,
        [
            'nombres' => 'Eduardo José',
            'apellidos' => 'García ',
            'edad' => '33',
            'sexo' => 'Masculino',
            'ci' => '10222382',
            'tipo_sangre' => 'AB-',
            'correo' => 'correo123@gmail.com',
            'telefono'=> '7645889',
            'direccion'=>'Av Libertadores'
        ],
        [
            'nombres' => 'Eduardo José',
            'apellidos' => 'García ',
            'edad' => '33',
            'sexo' => 'Masculino',
            'ci' => '10222382',
            'tipo_sangre' => 'AB-',
            'correo' => 'correo123@gmail.com',
            'telefono'=> '7645889',
            'direccion'=>'Av Libertadores'
        ]
        ]);
    }
}
