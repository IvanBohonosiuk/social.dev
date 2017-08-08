<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Auth;
use Illuminate\Http\Request;

class PostsController extends Controller
{
	public function create($id, Request $request)
	{
		$post = Post::create([
			'user_id' => $id,
			'from_user_id' => Auth::id(),
			'type' => 'text',
			'status' => 'public',
			'content' => $request->contents
		]);

		$this->data['id'] = $post->id;
		$this->data['from_user'] = Auth::user();
		$this->data['content'] = $request->contents;
		$this->data['created_at'] = $post->created_at->format('Y-m-d H:i:s');

		return $this->data;
    }

	public function profileFeeds($id)
	{
		$user = User::findOrFail($id);
		$feed = [];

		foreach ($user->posts as $post) :
			array_push($feed, $post);
		endforeach;

		return $feed;
    }

    public function allFeeds()
	{
		$this->data['user'] = Auth::user();

		return view('profiles.feeds', $this->data);
	}
}
