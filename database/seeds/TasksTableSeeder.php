<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Task::insert([
            [
                'title'            => 'Task 1',
                'address'          => 'ssk road, feni, bangladesh',
                'description'      => 'check it test abcdef',
                'client_id'        => 1,
                'user_id'          => 2,
                'inspection_id'    => null
            ],
            [
                'title'            => 'Task 2',
                'address'          => 'dhaka ',
                'description'      => 'description of here..',
                'client_id'        => 2,
                'user_id'          => 3,
                'inspection_id'    => null
            ],
            [
                'title'            => 'Look For this',
                'address'          => 'feni',
                'description'      => 'test for it',
                'client_id'        => 3,
                'user_id'          => 3,
                'inspection_id'    => null
            ],
            [
                'title'            => 'Look For this',
                'address'          => 'nowakhali',
                'description'      => 'test for its.',
                'client_id'        => 4,
                'user_id'          => 5,
                'inspection_id'    => null
            ]

        ]);
    }
}
