<?php

namespace App\Http\Controllers;

use App\Like;
use App\Post;
use Auth;
use Illuminate\Http\Request;

class LikesController extends Controller
{
    public function like($id)
	{
		$post = Post::findOrFail($id);

		$like = Like::create([
			'user_id' => Auth::id(),
			'post_id' => $post->id
		]);

		return Like::findOrFail($like->id);
	}

	public function unlike($id)
	{
		$post = Post::findOrFail($id);

		$like = Like::where('user_id', Auth::id())
			->where('post_id', $post->id)
			->first();

		$like->delete();

		return $like->id;
	}
}
