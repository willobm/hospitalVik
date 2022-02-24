<?php

namespace Database\Seeders;

use App\Models\Persona;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Persona::create([
            'name' => 'Luis Garcia',
            'slug' => 'Luis-Garcia',
            'cedula' => '1700567828',
            'telefono' => '0995647387',
            'direccion' => 'San Antonio de Pichincha',
            'ciudad' => 'Quito',
            'fechanac' => '1980-07-14',
            'genero' => 'Masculino',
            'estadocivil' => 'Casado',
            'user_id' => '1',
        ]);
        Persona::create([
            'name' => 'Monica Suarez',
            'slug' => 'Monica-Suarez',
            'cedula' => '1750067832',
            'telefono' => '0995647434',
            'direccion' => 'Pomasqui',
            'ciudad' => 'Quito',
            'fechanac' => '1985-03-14',
            'genero' => 'Femenino',
            'estadocivil' => 'Soltero',
            'user_id' => '2',
        ]);

        Persona::create([
            'name' => 'María Artieda',
            'slug' => 'María-Artieda',
            'cedula' => '1755457832',
            'telefono' => '0983928746',
            'direccion' => 'Pusuqui',
            'ciudad' => 'Guayaquil',
            'fechanac' => '1981-06-10',
            'genero' => 'Femenino',
            'estadocivil' => 'Casado',
            'user_id' => '3',
        ]);

        //Persona::factory(100)->create();
    }
}
