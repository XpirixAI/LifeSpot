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
        Schema::create('xpirix_contents', function (Blueprint $table) {
            $table->id();
            $table->string('main_title');
            $table->string('main_message');
            $table->string('message_area');
            $table->string('task_area');
            $table->string('family_area_1');
            $table->string('family_area_2');
            $table->string('residence_area');
            $table->string('trending_title');
            $table->string('cta_1_title');
            $table->string('cta_1_description');
            $table->string('cta_button_text');
            $table->string('footer_title');
            $table->string('footer_message');
            $table->string('footer_button_cta');
            $table->string('footer_left_link_1');
            $table->string('footer_left_link_2');
            $table->string('footer_left_link_3');
            $table->string('footer_left_link_4');
            $table->string('footer_left_link_5');
            $table->string('footer_middle_link_1');
            $table->string('footer_middle_link_2');
            $table->string('footer_middle_link_3');
            $table->string('footer_middle_link_4');
            $table->string('footer_middle_link_5');
            $table->string('footer_middle_link_6');
            $table->string('footer_right_link_1');
            $table->string('footer_right_link_2');
            $table->string('footer_right_link_3');
            $table->string('footer_right_link_4');
            $table->string('footer_right_link_5');
            $table->string('facebook_url');
            $table->string('twitter_url');
            $table->string('instagram_url');
            $table->string('youtube_url');
            $table->string('linkedin_url');
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
        Schema::dropIfExists('xpirix_contents');
    }
};
