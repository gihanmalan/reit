<?php

class Users_Controller extends Base_Controller {

	public $restful = true;

	public static $rules = array(
        'firstname' => 'alpha_dash',
        'lastname' => 'alpha_dash',
        'city' => 'alpha_dash',
        'country' => 'alpha_dash',
    	);

	public function get_index()
	{

		return View::make('users.dashboard')
					->with('title', 'Dashboard');
	}

	public function action_profile()
	{

	}

	public function get_settings()
	{
		return View::make('users.settings')
					->with('title', 'Settings');
	}

	public function post_settings()
	{
		$validation = Validator::make( Input::all(), static::$rules );

    	if ($validation->fails()){
			return Redirect::to('users/settings')->with_errors($validation->errors);
		}

    	$user = User::find(Auth::user()->id);
    	$user->firstname = Input::get('firstname');
    	$user->lastname = Input::get('lastname');
    	$user->city = Input::get('city');
    	$user->country = Input::get('country');
    	$user->save();

	    return Redirect::to('users/settings')->with('success', 'Your Profile has been Successfully Updated!');
	}



}