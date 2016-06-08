<?php

use Illuminate\Database\Eloquent;

class CategoryTableSeeder extends Illuminate\Database\Seeder
{
    public function run()
    {
        //DB::Table('categories')->truncate();
        factory('CodeCommerce\Category', 15)->create();
    }
}
