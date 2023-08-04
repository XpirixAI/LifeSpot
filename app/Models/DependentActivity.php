<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DependentActivity extends Model
{
    use HasFactory;
    protected $table = 'dependent_activities';

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function dependent()
    {
        return $this->belongsTo(Dependent::class);
    }
}
