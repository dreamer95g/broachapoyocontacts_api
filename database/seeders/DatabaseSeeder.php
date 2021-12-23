<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\User;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(1)->create();

        $this->call(RolesTableSeeder::class);

        $this->call(CategoriesTableSeeder::class);

        $this->call(UsersTableSeeder::class);


        //  PONER EL ROL DE ADMIN AL USUARIO
        DB::insert(' insert into role_user (role_id, user_id) values (?, ?) ', [1, 1]);
        DB::insert(' insert into role_user (role_id, user_id) values (?, ?) ', [1, 2]);
        DB::insert(' insert into role_user (role_id, user_id) values (?, ?) ', [1, 3]);
    }
}
