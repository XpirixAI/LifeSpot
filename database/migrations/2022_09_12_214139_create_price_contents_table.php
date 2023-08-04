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
        Schema::create('price_contents', function (Blueprint $table) {
            $table->id();
            $table->string('price_main_title');
            $table->string('price_desc_heading');
            $table->string('xpirix_plan_title');
            $table->string('month_price_free');
            $table->string('button_free_text');
            $table->string('free_feature_1');
            $table->string('free_feature_2');
            $table->string('free_feature_3');
            $table->string('free_feature_4');
            $table->string('free_feature_5');
            $table->string('free_feature_6');
            $table->string('free_feature_7');
            $table->string('basic_plan_title');
            $table->string('month_price_basic');
            $table->string('year_price_basic');
            $table->string('button_basic_text');
            $table->string('basic_feature_1');
            $table->string('basic_feature_2');
            $table->string('basic_feature_3');
            $table->string('basic_feature_4');
            $table->string('basic_feature_5');
            $table->string('basic_feature_6');
            $table->string('basic_feature_7');
            $table->string('family_plan_title');
            $table->string('month_price_family');
            $table->string('year_price_family');
            $table->string('button_family_text');
            $table->string('family_feature_1');
            $table->string('family_feature_2');
            $table->string('family_feature_3');
            $table->string('family_feature_4');
            $table->string('family_feature_5');
            $table->string('family_feature_6');
            $table->string('family_feature_7');
            $table->string('premium_plan_title');
            $table->string('month_price_premium');
            $table->string('year_price_premium');
            $table->string('button_premium_text');
            $table->string('premium_feature_1');
            $table->string('premium_feature_2');
            $table->string('premium_feature_3');
            $table->string('premium_feature_4');
            $table->string('premium_feature_5');
            $table->string('premium_feature_6');
            $table->string('premium_feature_7');
            $table->string('title_additional_plans');
            $table->string('desc_additional_plans');
            $table->string('additonal_plans_title_1');
            $table->text('additonal_plans_desc_1');
            $table->string('button_addtional_plans_text_1');
            $table->string('additonal_plans_title_2');
            $table->text('additonal_plans_desc_2');
            $table->string('button_addtional_plans_text_2');
            $table->string('additonal_plans_title_3');
            $table->text('additonal_plans_desc_3');
            $table->string('button_addtional_plans_text_3');
            $table->string('faq_section_title');
            $table->string('faq_title_1');
            $table->text('faq_desc_1');
            $table->string('faq_title_2');
            $table->text('faq_desc_2');
            $table->string('faq_title_3');
            $table->text('faq_desc_3');
            $table->string('faq_title_4');
            $table->text('faq_desc_4');
            $table->text('carousel_testimonial_1');
            $table->string('testiomonial_person_1');
            $table->string('carousel_info_1');
            $table->text('carousel_testimonial_2');
            $table->string('testiomonial_person_2');
            $table->string('carousel_info_2');
            $table->text('carousel_testimonial_3');
            $table->string('testiomonial_person_3');
            $table->string('carousel_info_3');
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
        Schema::dropIfExists('price_contents');
    }
};
