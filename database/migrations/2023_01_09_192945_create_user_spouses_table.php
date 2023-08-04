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
        Schema::create('user_spouses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('spouse_fname');
            $table->string('spouse_lname');
            $table->string('isBeneficiary')->nullable();
            $table->string('estate_role')->nullable();
            $table->string('spouse_email')->nullable();
            $table->string('spouse_phone')->nullable();
            $table->integer('birth_month')->nullable();
            $table->integer('birth_day')->nullable();
            $table->integer('birth_year')->nullable();
            $table->timestamp('birthdate')->nullable();
            $table->integer('anniversary_month')->nullable();
            $table->integer('anniversary_day')->nullable();
            $table->integer('anniversary_year')->nullable();
            $table->timestamp('anniversarydate')->nullable();
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
        Schema::dropIfExists('user_spouses');
    }
};
