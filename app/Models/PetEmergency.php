<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetEmergency extends Model
{
    use HasFactory;

    protected $table = 'pet_emergencies';

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function pet()
    {
        return $this->belongsTo(Pet::class);
    }
}
