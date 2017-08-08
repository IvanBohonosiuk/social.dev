<?php

namespace App\Http\Controllers;

use App\Friendship;
use App\Notifications\FriendRequestAccepted;
use App\Notifications\NewFriendRequest;
use App\User;
use Auth;
use Session;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show($id)
	{
		$this->data['user'] = User::findOrFail($id);
		$this->data['friends'] = User::findOrFail($id)->friends();

		return view('profiles.index', $this->data);
	}

	public function showPersonalSettings()
	{
		$this->data['user'] = Auth::user();

		return view('settings.personal', $this->data);
	}

	public function savePersonalSettings(Request $request)
	{
		$this->validate($request, [
			'first_name' => 'required|string|max:255',
			'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
			'gender' => 'required',
			'birthday' => 'required',
		]);

		Auth::user()->profile()->update([
			'about' => $request->about,
			'site' => $request->site,
			'phone' => $request->phone,
			'status' => $request->status,
			'location' => $request->location,
			'political' => $request->political,
			'fb' => $request->fb,
			'tw' => $request->tw,
			'inst' => $request->inst
		]);

		Auth::user()->update([
			'first_name' => $request->first_name,
			'last_name' => $request->last_name,
			'email' => $request->email,
			'gender' => $request->gender,
			'birthday' => $request->birthday
		]);

//		if($r->hasFile('avatar'))
//		{
//			Auth::user()->update([
//				'avatar' => $r->avatar->store('public/avatars')
//			]);
//		}

		Session::flash('success', 'Налаштування збережено.');
		return redirect()->back();

	}

	public function checkRelationshipStatus($id)
	{
		if (Auth::user()->is_friends_with($id) === 1) {
			return ["status" => "friends"];
		}

		if (Auth::user()->has_pending_friend_request_from($id) === 1) {
			return ["status" => "pending"];
		}

		if (Auth::user()->has_pending_friend_request_send_to($id) === 1) {
			return ["status" => "waiting"];
		}

		return ["status" => 0];
	}

	public function addFriend($id)
	{
		$resp = Auth::user()->add_friend($id);

		User::find($id)->notify(new NewFriendRequest(Auth::user()));

		return $resp;
	}

	public function acceptFriend($id)
	{
		$resp = Auth::user()->accept_friend($id);

		User::find($id)->notify(new FriendRequestAccepted(Auth::user()));

		return $resp;
	}

	public function allFriends($id)
	{
		$this->data['friends'] = User::findOrFail($id)->friends();
		$this->data['user'] = User::findOrFail($id);
		$this->data['friendships'] = Friendship::where('status', 1)->get();

		return view('profiles.friends', $this->data);
	}

	public function allFriendsRequest()
	{
		$this->data['user'] = Auth::user();

		return view('settings.user_requests', $this->data);
	}

	public function about($id)
	{
		$this->data['user'] = User::findOrFail($id);

		return view('profiles.about', $this->data);
	}

	public function photos($id)
	{
		$this->data['user'] = User::findOrFail($id);

		return view('profiles.photos', $this->data);
	}

	public function videos($id)
	{
		$this->data['user'] = User::findOrFail($id);

		return view('profiles.videos', $this->data);
	}

	public function music($id)
	{
		$this->data['user'] = User::findOrFail($id);

		return view('profiles.players', $this->data);
	}
}
