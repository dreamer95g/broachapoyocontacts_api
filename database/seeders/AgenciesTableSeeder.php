<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Nomenclators\Agency;

class AgenciesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Agency::create([
            'name' => 'Apoyo en Ecuador',
        ]);

        Agency::create([
            'name' => 'World Vision',
        ]);

        Agency::create([
            'name' => 'Junami',
        ]);

        Agency::create([
            'name' => 'World Serve',
        ]);
    }
}
