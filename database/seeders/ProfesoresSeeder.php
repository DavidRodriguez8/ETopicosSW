<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class ProfesoresSeeder extends Seeder
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
                'codProfesor' => 'P0',
                'nomProfesor' => 'Isabella Navarro',
                'catProfesor' => 'Ocasional'
            ],
            [
                'codProfesor' => 'P1',
                'nomProfesor' => 'Juan Pérez',
                'catProfesor' => 'Tiempo completo'
            ],
            [
                'codProfesor' => 'P2',
                'nomProfesor' => 'María Rodríguez',
                'catProfesor' => 'Cátedra'
            ],
            [
                'codProfesor' => 'P3',
                'nomProfesor' => 'Carlos Gómez',
                'catProfesor' => 'Parcial'
            ],
            [
                'codProfesor' => 'P4',
                'nomProfesor' => 'Laura Martínez',
                'catProfesor' => 'Investigador'
            ],
            [
                'codProfesor' => 'P5',
                'nomProfesor' => 'Andrés López',
                'catProfesor' => 'Ocasional'
            ],
            [
                'codProfesor' => 'P6',
                'nomProfesor' => 'Ana Sánchez',
                'catProfesor' => 'Asistente'
            ],
            [
                'codProfesor' => 'P7',
                'nomProfesor' => 'Pedro Ramírez',
                'catProfesor' => 'Planta'
            ],
            [
                'codProfesor' => 'P8',
                'nomProfesor' => 'Sofía Morales',
                'catProfesor' => 'Tiempo parcial'
            ],
            [
                'codProfesor' => 'P9',
                'nomProfesor' => 'Javier Castro',
                'catProfesor' => 'Catedrático'
            ]
        ];

        DB::table('profesores')->insert($datos);
    }
}
