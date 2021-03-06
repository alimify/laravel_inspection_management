<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert([
            [
                'id'         => 1,
                'title'      => 'Unit Inspection',
                'form'       => 'formOne'
            ],
            [
                'id'         => 2,
                'title'      => 'Default Inspection',
                'form'       => 'defaultForm'
            ]
        ]);
    }
}
