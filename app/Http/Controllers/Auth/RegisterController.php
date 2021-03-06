<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Profile;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/feed';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
			'first_name' => 'required|string|max:255',
			'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
			'gender' => 'required',
			'birthday' => 'required',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {

		if($data['gender'] == 'male')
		{
			$avatar = 'public/avatars/defaults/male.png';
		}
		else
		{
			$avatar = 'public/avatars/defaults/female.png';
		}

		$number = mt_rand(1, 12);
		if ($number > 0 && $number <= 6) :
			$cover = 'public/covers/defaults/' . $number . '.jpg';
//		elseif ($number > 6 && $number <= 12) :
		else :
			$cover = 'public/covers/defaults/' . $number . '.jpeg';
		endif;

		if (isset($data['terms'])) {
			$user = User::create([
				'first_name' => $data['first_name'],
				'last_name' => $data['last_name'],
				'email' => $data['email'],
				'password' => bcrypt($data['password']),
				'api_token' => str_random(60),
				'update_status' => Carbon::now(),
				'birthday' => $data['birthday'],
				'gender' => $data['gender'],
				'avatar' => $avatar,
				'cover' => $cover,
			]);

			Profile::create(['user_id' => $user->id ]);

			return $user;

		} else {

//			\Session::flash('error', 'Будь ласка, прийміть політику конфіденційності.');
//			\Cookie::forget('error', 'Будь ласка, прийміть політику конфіденційності.');

			return redirect()->back();

		}
	}
}
