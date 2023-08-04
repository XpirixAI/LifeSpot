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
        Schema::create('emergency_contacts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('fname');
            $table->string('lname');
            $table->string('email')->unique()->nullable();
            $table->string('phone')->nullable();
            $table->string('gender')->nullable();
            $table->string('relationship')->nullable();
            $table->boolean('isBeneficiary')->nullable();
            $table->string('address')->nullable();
            $table->string('address2')->nullable();
            $table->string('city')->nullable();
            $table->string('st')->nullable();
            $table->string('zip')->nullable();
            $table->integer('birth_month')->nullable();
            $table->integer('birth_day')->nullable();
            $table->integer('birth_year')->nullable();
            $table->timestamp('birthdate')->nullable();
            $table->text('notes_wishes')->nullable();
            $table->string('thumbnail')->nullable();
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
        Schema::dropIfExists('emergency_contacts');
    }
};
