<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
	protected $fillable = [
		'location', 'about', 'user_id', 'phone', 'status', 'political', 'fb', 'tw', 'inst', 'site', 'hobbies', 'tv_shows', 'movies', 'games', 'music', 'books', 'writers', 'others'
	];

	public function user()
	{
//		return $this->belongsTo('App\User');
		return $this->belongsTo(User::class);
	}
}
