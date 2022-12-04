<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeDefaultsToDistributorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('distributors', function (Blueprint $table) {
            $table->string('country')->nullable()->change();
            $table->string('city')->nullable()->change();
            $table->string('postal_address')->nullable()->change();
            $table->string('phone_number')->nullable()->change();
            $table->string('visiting_address')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('distributors', function (Blueprint $table) {
            $table->string('country')->change();
            $table->string('city')->change();
            $table->string('postal_address')->change();
            $table->string('phone_number')->change();
            $table->string('visiting_address')->change();
        });
    }
}
