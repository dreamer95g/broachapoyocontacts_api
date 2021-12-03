<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Nomenclators\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'admin',
        ]);
        Role::create([
            'name' => 'secretary',
        ]);
        Role::create([
            'name' => 'coordinator',
        ]);
        Role::create([
            'name' => 'sponsor',
        ]);

        Role::create([
            'name' => 'guest',
        ]);
    }
}
