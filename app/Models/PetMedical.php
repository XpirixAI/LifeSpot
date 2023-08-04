<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetMedical extends Model
{
    use HasFactory;

    protected $table = 'pet_medicals';

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
