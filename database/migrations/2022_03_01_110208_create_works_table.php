<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('works', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('work_category_id');
            $table->foreign('work_category_id')->references('id')->on('work_categories')->onDelete('cascade');
            $table->string('title')->nullable();
            $table->longText('sub_title')->nullable();
            $table->string('preview_image')->nullable();
            $table->string('homepage_image')->nullable();
            $table->string('video_file')->nullable();
            $table->text('inside_video_link')->nullable();
            $table->string('inside_image')->nullable();
            $table->longText('description')->nullable();
            $table->string('before_image')->nullable();
            $table->string('after_image')->nullable();
            $table->dateTime('show_on_homepage')->nullable();
            $table->string('slug')->unique();
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
        Schema::dropIfExists('works');
    }
}
