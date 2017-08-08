<?php

namespace App\Http\Controllers;

use App\Events\UserOnline;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserOnlineController extends Controller
{
	public function online($id, Request $request)
	{
		$user = User::findOrFail($id);

		if ($user->api_token == $request->api_token) :

			$user->status = 'online';
			$user->update_status = Carbon::now();
			$user->save();

			broadcast(new UserOnline($user));

			return response()->json('Ok', 200);
		else:
			return response()->json('Failed auth', 500);
		endif;
	}
}
