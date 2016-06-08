<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAddressToUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('address', 255)->default('default_value');
            $table->string('city', 50)->default('default_value');
            $table->string('state', 50)->default('default_value');
            $table->string('fu', 2)->default('dv');
            $table->integer('zipcode')->default();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->removeColumn('address');
            $table->removeColumn('city');
            $table->removeColumn('state');
            $table->removeColumn('fu');
            $table->removeColumn('zipcode');
        });
    }
}
