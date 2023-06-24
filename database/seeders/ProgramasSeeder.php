<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class ProgramasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos=[
            [
                'codPrograma' => '01',
                'nomPrograma' => 'Arquitectura',
                'facultad' => '10'
            ],
            [
                'codPrograma' => '02',
                'nomPrograma' => 'Artes Visuales',
                'facultad' => '10'
            ],
            [
                'codPrograma' => '03',
                'nomPrograma' => 'Diseño Gráfico',
                'facultad' => '10'
            ],
            [
                'codPrograma' => '04',
                'nomPrograma' => 'Ingeniería Civil',
                'facultad' => '20'
            ],
            [
                'codPrograma' => '05',
                'nomPrograma' => 'Ingeniería Electrónica',
                'facultad' => '20'
            ],
            [
                'codPrograma' => '06',
                'nomPrograma' => 'Ingeniería en Sistemas',
                'facultad' => '20'
            ],
            [
                'codPrograma' => '07',
                'nomPrograma' => 'Derecho',
                'facultad' => '30'
            ],
            [
                'codPrograma' => '08',
                'nomPrograma' => 'Licenciatura en Ciencias Naturales y Educación Ambiental',
                'facultad' => '40'
            ],
            [
                'codPrograma' => '09',
                'nomPrograma' => 'Licenciatura en Lengua Castellana y Literatura',
                'facultad' => '40'
            ],
            [
                'codPrograma' => '11',
                'nomPrograma' => 'Biología',
                'facultad' => '50'
            ],
            [
                'codPrograma' => '12',
                'nomPrograma' => 'Física',
                'facultad' => '50'
            ],
            [
                'codPrograma' => '13',
                'nomPrograma' => 'Licenciatura en Informática',
                'facultad' => '50'
            ]
        ];

        DB::table('programas')->insert($datos);
    }
}
