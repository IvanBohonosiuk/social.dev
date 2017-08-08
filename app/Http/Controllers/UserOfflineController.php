<?php

namespace App\Http\Controllers;

use App\Events\UserOffline;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserOfflineController extends Controller
{
	public function offline($id, Request $request)
	{
		$user = User::findOrFail($id);

		if ($user->api_token == $request->api_token) :

			$user->status = 'disconected';
			$user->update_status = Carbon::now();
			$user->save();

			broadcast(new UserOffline($user));

			return response()->json('Ok', 200);
		else:
			return response()->json('Failed auth', 500);
		endif;
	}
}
