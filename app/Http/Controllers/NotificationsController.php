<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class NotificationsController extends Controller
{
    public function getUnreadUserRequests()
	{
		$nots = Auth::user()->unreadNotifications;

		return $nots;
	}

	public function markReadFriendsRequest()
	{
		$user_nots = Auth::user()->unreadNotifications;

		foreach ($user_nots as $not) {
			if ($not->notifiable_type === 'App\User') {
				$not->markAsRead();
			}
		}

		return 1;
	}
}
