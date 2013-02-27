<?php 

class MyAuth_User_Controller extends Base_Controller{
	
	public static $rules = array(
        'username' => 'required|unique:users',
        'email' => 'required|email|unique:users',
        'password' => 'required|confirmed'
    );

	public function action_signup(){

		$validation = Validator::make( Input::all(), static::$rules );

		if ($validation->fails()){
			return Redirect::to('signup')->with_errors($validation->errors);
		}

		$user_data = array( 'user_level' => 1, 'username' => Input::get('username'), 'email' => Input::get('email'), 'password' => Hash::make(Input::get('password')) ); 

	    $user = new User($user_data);
	    $user->save();

	    $redirect_url = Config::get('myauth::config.bundle_route') . '/' . Config::get('myauth::config.login_route');

	    return Redirect::to($redirect_url)->with('success', 'Your Account has been Successfully Created! Please Login Below.');

	}

	public function action_login(){
		
	    // get login POST data
	    $userdata = array(
	        'username'      => Input::get('username'),
	        'password'      => Input::get('password')
	    );

	    if ( Auth::attempt($userdata) ){
	        // we are now logged in, go to dashboard
	        
	        if(Config::get('myauth::config.login_redirect') != ''){
	    		$redirect_url = Config::get('myauth::config.login_redirect');
	    	} else {
	    		$redirect_url = Config::get('myauth::config.bundle_route') . '/dashboard';
	    	}

	        return Redirect::to($redirect_url);
	    } else {
	        // auth failure! redirect to login with errors
	        $redirect_url = Config::get('myauth::config.bundle_route') . '/' . Config::get('myauth::config.login_route');
	        return Redirect::to($redirect_url)->with('error', 'Incorrect login or password');
	    }

	}

}