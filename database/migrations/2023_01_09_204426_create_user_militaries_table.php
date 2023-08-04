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
        Schema::create('user_militaries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('branch');
            $table->string('rank')->nullable();
            $table->string('service_length')->nullable();
            $table->string('service_start_month')->nullable();
            $table->string('service_start_day')->nullable();
            $table->string('service_start_year')->nullable();
            $table->string('service_end_month')->nullable();
            $table->string('service_end_day')->nullable();
            $table->string('service_end_year')->nullable();
            $table->text('notes')->nullable();
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
        Schema::dropIfExists('user_militaries');
    }
};
