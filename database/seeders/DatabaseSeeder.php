<?php

namespace Database\Seeders;

use App\Models\Agenda;
use App\Models\Diagnostico;
use App\Models\Especialidad;
use App\Models\Evento;
use App\Models\Examen;
use App\Models\Folio;
use App\Models\Persona;
use App\Models\Profesional;
use App\Models\Receta;
use App\Models\Signo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call(UserSeeder::class);
        $this->call(EspecialidadSeeder::class);
        $this->call(PersonaSeeder::class);
        //Especialidad::factory(8)->create();
        //Persona::factory(9)->create();
        
        Profesional::factory(9)->create();
        Agenda::factory(9)->create();
        Evento::factory(9)->create();
        
        Folio::factory(9)->create();
        Diagnostico::factory(9)->create();
        Signo::factory(9)->create();
        Receta::factory(9)->create();
        Examen::factory(9)->create();
    }
}
