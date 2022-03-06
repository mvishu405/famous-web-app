<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomepageSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homepage_sliders', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('designation')->nullable();
            $table->longText('description')->nullable();
            $table->string('image')->nullable();

            $table->bigInteger('order_column')->nullable();
            $table->dateTime('published_at')->nullable();
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
        Schema::dropIfExists('homepage_sliders');
    }
}
