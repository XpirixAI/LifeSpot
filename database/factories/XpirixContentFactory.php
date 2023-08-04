<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\XpirixContent>
 */
class XpirixContentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'main_title' => 'Grow as you go.',
            'main_message' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae atque veritatis quis',
            'message_area' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae atque veritatis quis',
            'task_area' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae atque veritatis quis',
            'family_area_1' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae atque veritatis quis',
            'family_area_2' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae atque veritatis quis',
            'residence_area' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae atque veritatis quis',
            'trending_title' => 'Trending Today',
            'cta_1_title' => 'Lorem Ipsum Dolor Sit Amet',
            'cta_1_description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae aperiam doloribus quis.',
            'cta_button_text' => 'Click Me',
            'footer_title' => 'Lorem Ipsum Dolor Sit Amet',
            'footer_message' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae aperiam doloribus quis.',
            'footer_button_cta' => 'Click Me',
            'footer_left_link_1' => 'Link Title',
            'footer_left_link_2' => 'Link Title',
            'footer_left_link_3' => 'Link Title',
            'footer_left_link_4' => 'Link Title',
            'footer_left_link_5' => 'Link Title',
            'footer_middle_link_1' => 'Link Title',
            'footer_middle_link_2' => 'Link Title',
            'footer_middle_link_3' => 'Link Title',
            'footer_middle_link_4' => 'Link Title',
            'footer_middle_link_5' => 'Link Title',
            'footer_middle_link_6' => 'Link Title',
            'footer_right_link_1' => 'Link Title',
            'footer_right_link_2' => 'Link Title',
            'footer_right_link_3' => 'Link Title',
            'footer_right_link_4' => 'Link Title',
            'footer_right_link_5' => 'Link Title',
            'facebook_url' => 'https://www.google.com/',
            'twitter_url' => 'https://www.google.com/',
            'instagram_url' => 'https://www.google.com/',
            'youtube_url' => 'https://www.google.com/',
            'linkedin_url' => 'https://www.google.com/',
        ];
    }
}
