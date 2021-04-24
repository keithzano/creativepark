<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('phone_number');
            $table->string('company_name1');
            $table->string('company_name2')->nullable();
            $table->string('company_name3')->nullable();
            $table->string('company_name4')->nullable();
            $table->string('company_street_address');
            $table->string('company_suburb');
            $table->string('company_city');
            $table->string('company_postal_code');
            $table->string('director_1_first_name');
            $table->string('director_1_last_name');
            $table->string('director_1_email');
            $table->string('director_1_phone_number');
            $table->string('director_1_address');
            $table->string('director_2_first_name')->nullable();
            $table->string('director_2_last_name')->nullable();
            $table->string('director_2_email')->nullable();
            $table->string('director_2_phone_number')->nullable();
            $table->string('director_2_address')->nullable();
            $table->text('message')->nullable();
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
        Schema::dropIfExists('company_registrations');
    }
}
