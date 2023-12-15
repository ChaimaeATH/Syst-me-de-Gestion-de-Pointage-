<?php

use App\Role;
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
        $role = Role::create([
            'slug' => 'admin',
            'name' => 'Adminstrator',
        ]);
    }
}
