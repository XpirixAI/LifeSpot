<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RealestateLien extends Model
{
    use HasFactory;

    protected $table = 'realestate_liens';

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function realEstate()
    {
        return $this->belongsTo(RealEstate::class);
    }
}
