<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCareerEnquiriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('career_enquiries', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('mobile_number')->nullable();
            $table->string('emailId')->nullable();
            $table->string('position')->nullable();
            $table->text('showreel_link')->nullable();
            $table->longText('message')->nullable();
            $table->string('cv')->nullable();
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
        Schema::dropIfExists('career_enquiries');
    }
}
