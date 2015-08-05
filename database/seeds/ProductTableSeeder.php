<?php

use Illuminate\Database\Eloquent;

class ProductTableSeeder extends Illuminate\Database\Seeder
{
    public function run() {
        //DB::Table('products')->truncate();
        factory('CodeCommerce\Product', 15)->create();
    }
}