<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'fname',
        'lname',
        'uname',
        'email',
        'can_edit',
        'has_access',
        'ads_access',
        'role',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function posts()
    {
       return $this->hasMany(Post::class);
    }

    public function getAvatarUrlAttribute()
    {
        if ($this->avatar && Storage::disk('avatars')->exists($this->avatar)) {
            return Storage::dis('avatars')->url($this->avartar);
        }

        return asset('upload/no_image.png');
    }

    public function personalInformation()
    {
        return $this->hasOne(PersonalInformation::class);
    }

    public function assets()
    {
        return $this->hasMany(Asset::class);
    }

    public function addtionalAssets()
    {
        return $this->hasMany(AdditionalAsset::class);
    }

    public function personalInformationAssets()
    {
        return $this->hasMany(PersonalInformationAsset::class);
    }

    public function userMedical() //user Medical History (i.e. a user has one medical history)
    {
        return $this->hasOne(UserMedical::class);
    }

    public function myXpirix() //user's Personal Web site
    {
        return $this->hasOne(Myxpirix::class);
    }
}
