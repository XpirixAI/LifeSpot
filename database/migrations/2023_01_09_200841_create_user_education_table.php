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
        Schema::create('user_education', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('school');
            $table->string('degree')->nullable();
            $table->string('school_phone')->nullable();
            $table->string('school_email')->nullable();
            $table->string('school_start_month')->nullable();
            $table->string('school_start_day')->nullable();
            $table->string('school_start_year')->nullable();
            $table->string('school_end_month')->nullable();
            $table->string('school_end_day')->nullable();
            $table->string('school_end_year')->nullable();
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
        Schema::dropIfExists('user_education');
    }
};
