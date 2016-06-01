<?php

use Illuminate\Database\Eloquent;

class UserTableSeeder extends Illuminate\Database\Seeder
{
    public function run() {
        DB::Table('users')->truncate();
        factory('CodeCommerce\User')->create(
            [
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('12345'),
                'remember_token' => str_random(10),
                'is_admin' => 1,
            ]
        );
        factory('CodeCommerce\User')->create(
            [
                'name' => 'Cliente',
                'email' => 'cliente@cliente.com',
                'password' => bcrypt('12345'),
                'remember_token' => str_random(10),
                'is_admin' => 0,
            ]
        );
        factory('CodeCommerce\User', 15)->create();
    }
}