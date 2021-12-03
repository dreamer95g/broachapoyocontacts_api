<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Nomenclators\TrackingType;

class TrackingTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TrackingType::create([
            'name' => 'Llamada de WhatsApp',
        ]);

        TrackingType::create([
            'name' => 'Visita',
        ]);

        TrackingType::create([
            'name' => 'Email',
        ]);

        TrackingType::create([
            'name' => 'Llamada',
        ]);
    }
}
