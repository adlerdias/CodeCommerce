<?php

use Illuminate\Database\Eloquent;

class UserTableSeeder extends Illuminate\Database\Seeder
{
    public function run() {
        DB::Table('users')->truncate();
        factory('CodeCommerce\User', 15)->create();
    }
}