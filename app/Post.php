<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	public $with = ['from_user', 'likes'];

    protected $fillable = ['user_id', 'from_user_id', 'type', 'status', 'content'];

	public function user()
	{
		return $this->belongsTo(User::class);
    }

	public function from_user()
	{
		return $this->belongsTo(User::class);
	}

	public function likes()
	{
		return $this->hasMany(Like::class);
	}
}
