
            $table->string('address')->nullable();
            $table->string('address2')->nullable();
            $table->string('city')->nullable();
            $table->string('st')->nullable();
            $table->string('zip')->nullable();
            $table->string('isPrimary_residence')->nullable();
            $table->string('inTrust')->nullable();
            $table->text('notes_wishes')->nullable();

            Schema::create('home_liens', function (Blueprint $table) {
                $table->id();
                $table->foreignId('user_id')->constrained()->cascadeOnDelete();
                $table->foreignId('real_estate_id')->constrained()->cascadeOnDelete();
                $table->string('creditor_name');
                $table->string('account_number')->nullable();
                $table->string('balance_owed')->nullable();
                $table->string('phone')->nullable();
                $table->string('website')->nullable();
                $table->text('notes')->nullable();
                $table->timestamps();
            });


            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('fname');
            $table->string('lname');
            $table->string('isBeneficiary')->nullable();
            $table->string('estate_role')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('address2')->nullable();
            $table->string('city')->nullable();
            $table->string('st')->nullable();
            $table->string('zip')->nullable();
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



$table->foreignId('user_id')->constrained()->cascadeOnDelete();
$table->foreignId('personal_information_id')->constrained()->cascadeOnDelete();
$table->string('multi_image')->nullable();


// adding address fields to personal_information
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
        Schema::table('personal_information', function (Blueprint $table) {
            $table->string('address')->nullable();
            $table->string('address2')->nullable();
            $table->string('city')->nullable();
            $table->string('st')->nullable();
            $table->string('zip')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('personal_information', function (Blueprint $table) {
            //
        });
    }
};
