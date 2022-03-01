<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomepageBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homepage_banners', function (Blueprint $table) {
            $table->id();
            $table->string('desktop_banner')->nullable();
            $table->string('mobile_banner')->nullable();
            $table->text('title')->nullable();
            $table->longText('description')->nullable();
            $table->text('banner_url')->nullable();
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
        Schema::dropIfExists('homepage_banners');
    }
}
