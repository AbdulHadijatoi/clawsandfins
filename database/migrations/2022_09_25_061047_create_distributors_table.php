<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistributorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('distributors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('company_name');
            $table->string('contact_name');
            $table->string('country');
            $table->string('city');
            $table->string('postal_address');
            $table->string('phone_number');
            $table->string('website_url')->nullable();
            $table->string('adminstration_email');
            $table->string('order_email')->nullable();
            $table->string('visiting_address');
            $table->string('want_location_disclose')->default(1);
            $table->string('is_location_correct');
            $table->string('need_support');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('distributors');
    }
}
