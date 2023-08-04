<?php

namespace App\Models;

use App\Http\Livewire\PetVet;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function petAssets()
    {
        return $this->hasMany(PetAsset::class);
    }

    public function petGuardian()
    {
        return $this->hasOne(PetGuardian::class);
    }

    public function petVet()
    {
        return $this->hasOne(PetVet::class);
    }
}
