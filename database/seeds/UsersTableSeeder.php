<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
                'id'              => 1,
                'role_id'         => 1,
                'name'            => 'Admin',
                'email'           => 'admin@mail.com',
                'password'        => Hash::make('0987654321')
            ],
            [
                'id'              => 2,
                'role_id'         => 2,
                'name'            => 'Staff 1',
                'email'           => 'staff1@mail.com',
                'password'        => Hash::make('staff1')
            ],
            [
                'id'              => 3,
                'role_id'         => 2,
                'name'            => 'Staff 2',
                'email'           => 'staff2@mail.com',
                'password'        => Hash::make('staff2')
            ],
            [
                'id'              => 4,
                'role_id'         => 2,
                'name'            => 'Staff 3',
                'email'           => 'staff3@mail.com',
                'password'        => Hash::make('staff3')
            ],
            [
                'id'              => 5,
                'role_id'         => 2,
                'name'            => 'Staff 4',
                'email'           => 'staff4@mail.com',
                'password'        => Hash::make('staff4')
            ]

        ]);
    }
}
