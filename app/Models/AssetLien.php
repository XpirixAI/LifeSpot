<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssetLien extends Model
{
    use HasFactory;

    protected $table = 'asset_liens';

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function asset()
    {
        return $this->belongsTo(Asset::class);
    }
}
