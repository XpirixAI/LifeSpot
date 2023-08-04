<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class XpirixContent extends Model
{
    use HasFactory;

    protected $fillable = [
        'main_title',
        'main_message',
        'message_area',
        'task_area',
        'family_area_1',
        'family_area_2',
        'residence_area',
        'trending_title',
        'cta_1_title',
        'cta_1_description',
        'cta_button_text',
        'footer_title',
        'footer_message',
        'footer_button_cta',
        'footer_left_link_1',
        'footer_left_link_2',
        'footer_left_link_3',
        'footer_left_link_4',
        'footer_left_link_5',
        'footer_middle_link_1',
        'footer_middle_link_2',
        'footer_middle_link_3',
        'footer_middle_link_4',
        'footer_middle_link_5',
        'footer_middle_link_6',
        'footer_right_link_1',
        'footer_right_link_2',
        'footer_right_link_3',
        'footer_right_link_4',
        'footer_right_link_5',
        'facebook_url',
        'twitter_url',
        'instagram_url',
        'youtube_url',
        'linkedin_url',
    ];

}
