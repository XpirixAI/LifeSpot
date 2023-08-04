<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalInformation extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $casts = [
        'birthdate' => 'datetime:Y-m-d',
    ];


    public function personalInformationAssets()
    {
        return $this->hasMany(PersonalInformationAsset::class);
    }

}
