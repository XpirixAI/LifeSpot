<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function messages()
    {
        return $this->hasMany(Message::class);
        // return $this->hasMany(Message::class)->orderBy('conversation_id','asc');
        // return $this->hasMany(Message::class)->orderBy('created_at','asc');
        // return $this->hasMany(Message::class)->orderBy('created_at','Desc');
    }

    public function sender()
    {
        return $this->belongsTo(User::class);
    }

    public function receiver()
    {
        return $this->belongsTo(User::class);
    }
}
