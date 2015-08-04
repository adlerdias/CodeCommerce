<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent;
use CodeCommerce\Category;


class CategoryTableSeeder extends Illuminate\Database\Seeder
{
    public function run() {
        DB::Table('categories')->truncate();
        factory('CodeCommerce\Category', 15)->create();
    }
}