<?php

namespace Database\Seeders;

use App\Models\Bedroom;
use Illuminate\Database\Seeder;

class BedroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bedroom::create([
            'title' => 'Espectacular penth house',
            'description' => 'Espectacular penth house grande con vista al mar',
            'city' => 'Cartagena',
            'address' => 'Calle #1',
            'beds' => 4,
            'rooms' => 2,
            'bathrooms' => 2,
            'capacity' => 8,
            'price' => 250
        ]);
        Bedroom::create([
            'title' => 'Casa pequeña',
            'description' => 'Casa pequeña a 100 mts del mar',
            'city' => 'Cartagena',
            'address' => 'Calle #1 krra 2',
            'beds' => 2,
            'rooms' => 1,
            'bathrooms' => 1,
            'capacity' => 4,
            'price' => 80
        ]);
        Bedroom::create([
            'title' => 'Casa de dos pisos',
            'description' => 'Casa de dos pisos con amplio patio',
            'city' => 'Santa Marta',
            'address' => 'Calle 25 #12-54',
            'beds' => 6,
            'rooms' => 3,
            'bathrooms' => 2,
            'capacity' => 8,
            'price' => 160
        ]);
        Bedroom::create([
            'title' => 'Apartamento en segundo piso',
            'description' => 'Espectacular apartamento en el poblado en segundo piso',
            'city' => 'Medellín',
            'address' => 'Calle 86 #125C',
            'beds' => 2,
            'rooms' => 2,
            'bathrooms' => 2,
            'capacity' => 3,
            'price' => 190
        ]);
        Bedroom::create([
            'title' => 'Habitación en casa compartida',
            'description' => 'Habitación dentro de una amplia casa con amplizas zonas verdes',
            'city' => 'Barranquilla',
            'address' => 'Calle #86 #25',
            'beds' => 1,
            'rooms' => 1,
            'bathrooms' => 1,
            'capacity' => 2,
            'price' => 70
        ]);
       
    }
}
