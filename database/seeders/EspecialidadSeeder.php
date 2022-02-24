<?php

namespace Database\Seeders;

use App\Models\Especialidad;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EspecialidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Especialidad::create([
            'name' => 'Pediatría',
            'slug' => 'Pediatría',
            'descripcion' => 'La pediatría es la especialidad médica y es la rama de la medicina que involucra la atención médica de bebés, niños y adolescentes.'
        ]);
        Especialidad::create([
            'name' => 'Neurología',
            'slug' => 'Neurología',
            'descripcion' => 'La neurología es la especialidad médica que trata los trastornos del sistema nervioso'
        ]);
        Especialidad::create([
            'name' => 'Cardiología',
            'slug' => 'Cardiología',
            'descripcion' => 'La cardiología es la rama de la medicina que se encarga del estudio, diagnóstico y tratamiento de las enfermedades del corazón y del sistema circulatorio.'
        ]);

        Especialidad::create([
            'name' => 'Psiquiatría',
            'slug' => 'Psiquiatría',
            'descripcion' => 'La psiquiatría o siquiatría es la especialidad médica dedicada al estudio de los trastornos mentales de origen genético o neurológico con el objetivo de prevenir, evaluar, diagnosticar, tratar y rehabilitar a las personas con trastornos mentales, y asegurar la autonomía y la adaptación del individuo a las condiciones de su existencia.'
        ]);
        
        //Especialidad::factory(2)->create();
    }
}
