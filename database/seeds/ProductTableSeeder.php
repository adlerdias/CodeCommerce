<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent;
use CodeCommerce\Category;


class ProductTableSeeder extends Illuminate\Database\Seeder
{
    public function run() {
        DB::Table('products')->truncate();
        factory('CodeCommerce\Product', 15)->create();
    }
}