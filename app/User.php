<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Traits\Friendable;
use Laravel\Passport\HasApiTokens;
use Storage;

class User extends Authenticatable
{
    use Notifiable, Friendable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password', 'api_token', 'status', 'update_status', 'avatar', 'cover', 'gender', 'birthday'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

	public function profile()
	{
		return $this->hasOne(Profile::class);
	}

	public function posts()
	{
		return $this->hasMany(Post::class);
	}

	public function likes()
	{
		return $this->hasMany(Like::class);
	}

	public function getAvatarAttribute($avatar)
	{
		return asset(Storage::url($avatar));
	}

	public function getCoverAttribute($cover)
	{
		return asset(Storage::url($cover));
	}

}
