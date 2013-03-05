<?php

class Friends_Controller extends Base_Controller {

	public $restful = true;

	public function get_index()
	{
		// Log::write('info', Auth::user()->username);

		$followers = Friends::where('following', '=', Auth::user()->id)->get();
		$following = Friends::where('user_id', '=', Auth::user()->id)->get();

		//people that are following you AKA your followers
		$followers_array = array();
		foreach ($followers as $follow)
		{
			$followers_array[] = User::find($follow->user_id);
		}

		//people that you are following
		$following_user_id = array(Auth::user()->id);
		$following_array = array();
		foreach ($following as $follow)
		{
			$following_array[] = User::find($follow->following);
			//get array of user_ids of users you are following
			$following_user_id[] = $follow->following;
		}

		//get list of users who are not yourself AND who you are not already following
		$who_to_follow = User::where_not_in('id', $following_user_id)->get();

		return View::make('users.friends')
					->with('title', 'Friends')
					->with('followers', $followers_array)
					->with('following', $following_array)
					->with('following_user_id', $following_user_id)
					->with('who_to_follow', $who_to_follow);
	}

	public function get_unfollow($id)
	{
		$friend = Friends::where('user_id', '=', Auth::user()->id)->where('following', '=', $id)->first();

		$friend->delete();

		return Redirect::to('friends/index');
	}

	public function get_follow($id)
	{
		$friend = new Friends;

		xdebug_break();

		$friend->user_id = Auth::user()->id;
		$friend->following = $id;
		$friend->save();

		return Redirect::to('friends/index');
	}

}