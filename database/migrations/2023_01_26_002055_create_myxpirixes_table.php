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
        Schema::create('myxpirixes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('nav_3')->nullable();
            $table->string('title')->nullable();
            $table->string('line_1')->nullable();
            $table->string('line_2')->nullable();
            $table->string('line_3')->nullable();
            $table->string('line_4')->nullable();
            $table->string('cta_button')->nullable();
            $table->string('big_image')->nullable();
            $table->string('small_image')->nullable();
            $table->string('left_color')->nullable();
            $table->string('right_color')->nullable();
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
        Schema::dropIfExists('myxpirixes');
    }
};
