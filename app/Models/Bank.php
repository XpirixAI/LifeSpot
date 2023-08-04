<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function bankAssets()
    {
        return $this->hasMany(BankAsset::class);
    }

    // public function petGuardian()
    // {
    //     return $this->hasOne(PetGuardian::class);
    // }

    // public function petVet()
    // {
    //     return $this->hasOne(PetVet::class);
    // }
}
