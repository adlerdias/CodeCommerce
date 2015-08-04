<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent;
use CodeCommerce\Category;


class UserTableSeeder extends Illuminate\Database\Seeder
{
    public function run() {
        DB::Table('users')->truncate();
        factory('CodeCommerce\User', 15)->create();
    }
}