<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Role::insert([
            [
                'id'          => 1,
                'title'       => 'Admin',
                'active'      => true
            ],
            [
                'id'          => 2,
                'title'       => 'Staff',
                'active'      => true
            ]
        ]);
    }
}
