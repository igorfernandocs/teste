<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('playlists', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description');
            $table->string('logo');
            $table->string('image');
            $table->string('thumbnail');

            $table->boolean('banner_home_active')->default(0);
            $table->string('banner_home_image')->nullable();
            $table->text('banner_home_description')->nullable();
            $table->string('banner_home_button_link')->nullable();
            $table->string('banner_home_button_text')->nullable();

            $table->integer('order')->default(1);

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
        Schema::dropIfExists('playlists');
    }
};
