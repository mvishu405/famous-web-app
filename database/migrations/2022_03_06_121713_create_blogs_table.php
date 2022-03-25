<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('featured_image')->nullable();
            $table->string('cover_image')->nullable();
            $table->dateTime('blog_date')->nullable();
            $table->string('read_time')->nullable();
            $table->longText('description')->nullable();
            $table->string('meta_title')->nullable();
            $table->longText('meta_keywords')->nullable();
            $table->string('meta_image')->nullable();
            $table->longText('meta_description')->nullable();
            $table->string('og_title')->nullable();
            $table->string('og_type')->nullable();
            $table->string('og_url')->nullable();
            $table->string('og_site_name')->nullable();
            $table->string('og_image')->nullable();
            $table->longText('og_description')->nullable();
            $table->string('twitter_title')->nullable();
            $table->string('twitter_card')->nullable();
            $table->string('twitter_site')->nullable();
            $table->string('twitter_image')->nullable();
            $table->longText('twitter_description')->nullable();
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
        Schema::dropIfExists('blogs');
    }
}
