<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeDefaultsToInvestorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('investors', function (Blueprint $table) {
            $table->string('last_name')->nullable()->change();
            $table->string('address')->nullable()->change();
            $table->string('size_of_investment')->nullable()->change();
            $table->text('special_skills')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('investors', function (Blueprint $table) {
            $table->string('last_name')->change();
            $table->string('address')->change();
            $table->string('size_of_investment')->change();
            $table->text('special_skills')->change();
        });
    }
}
