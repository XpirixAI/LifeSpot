<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dependent extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function dependentAssets()
    {
        return $this->hasMany(DependentAsset::class);
    }

    public function dependentGuardian()
    {
        return $this->hasOne(DependentGuardian::class);
    }
}
