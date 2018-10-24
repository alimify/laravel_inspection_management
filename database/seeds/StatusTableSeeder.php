<?php

use Illuminate\Database\Seeder;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Status::insert([
            [
                'id'    => 1,
                'title' => 'In Queue',
                'class' => 'btn btn-warning'
            ],
            [
                'id'    => 2,
                'title' => 'Submitted',
                'class' => 'btn btn-primary'
            ],
            [
                'id'    => 3,
                'title' => 'Reviewed',
                'class' => 'btn btn-info'
            ],
            [
                'id'    => 4,
                'title' => 'Confirmed',
                'class' => 'btn btn-success'
            ]
        ]);
    }
}
