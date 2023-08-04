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
        Schema::create('personal_information', function (Blueprint $table) {
            $table->id();
             // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
             $table->foreignId('user_id')->constrained()->cascadeOnDelete();
             $table->string('gender')->nullable();
             $table->string('phone')->nullable();
             $table->string('alt_phone')->nullable();
             $table->integer('birth_month')->nullable();
             $table->integer('birth_day')->nullable();
             $table->integer('birth_year')->nullable();
             $table->timestamp('birthdate')->nullable();
             $table->string('marital_status')->nullable();
             $table->string('number_of_dependents')->nullable();
             $table->text('notes_wishes')->nullable();
             $table->string('address')->nullable();
             $table->string('address2')->nullable();
             $table->string('city')->nullable();
             $table->string('st')->nullable();
             $table->string('zip')->nullable();
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
        Schema::dropIfExists('personal_information');
    }
};
