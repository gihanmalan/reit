<?php

class Users_Controller extends Base_Controller {

	public $restful = true;

	public static $settings_rules = array();

	public static $status_rules = array(
		'status' => 'max:140',
		);

	public static $blog_rules = array(
		'title' => 'max:250',
		);



	public function get_index()
	{
		// Log::write('info', Auth::user()->username);
		// $posts = DB::query("SELECT * FROM ((SELECT * FROM user_status WHERE user_id=1) UNION (SELECT * FROM user_blog WHERE user_id=1) ) AS `mytable` ORDER BY created_at DESC");

		$statuses = Status::where('user_id', '=', Auth::user()->id)->get();
		$blogs = Blog::where('user_id', '=', Auth::user()->id)->get();

		//get number of blog posts
		$blog_count = count($blogs);

		//get number of followers
		$followers = Friends::where('following', '=', Auth::user()->id)->get();
		$follower_count = count($followers);

		//get number of users you are following
		$following = Friends::where('user_id', '=', Auth::user()->id)->get();
		$following_count = count($following);

		//merge blogs and statuses
		if (!empty($statuses) || !empty($blogs))
		{
			$posts = array_merge($statuses, $blogs);

			//sort posts by date
			foreach ($posts as $key => $row) {
			    $date[$key] = $row->created_at;
			}

			array_multisort($date, SORT_DESC, $posts);
		}
		else
		{
			$posts = array();
		}

		return View::make('users.dashboard')
					->with('title', 'Dashboard')
					->with('follower_count', $follower_count)
					->with('following_count', $following_count)
					->with('blog_count', $blog_count)
					->with('posts', $posts);
	}

	public function post_status()
	{
		$validation = Validator::make( Input::all(), static::$status_rules );

    	if ($validation->fails()){
			return Redirect::to('users/index')->with_errors($validation->errors);
		}

		$status = new Status;
		$status->user_id = Auth::user()->id;
		$status->status = Input::get('status');
		$status->save();

		return Redirect::to('users/index')->with('success', 'Your status has been updated');

	}

	public function get_blog_post($id)
	{
		$blog = Blog::find($id);

		return View::make('users.blog_post')
					->with('title', 'Dashboard')
					->with('post', $blog);
	}

	public function post_blog()
	{
		$validation = Validator::make( Input::all(), static::$blog_rules );

    	if ($validation->fails()){
			return Redirect::to('users/index')->with_errors($validation->errors);
		}

		$blog = new Blog;
		$blog->user_id = Auth::user()->id;
		$blog->post = Input::get('post');
		$blog->title = Input::get('title');
		$blog->save();

		return Redirect::to('users/index')->with('success', 'Your have added a blog post!');
	}


	public function get_settings()
	{
		return View::make('users.settings')
					->with('title', 'Settings');
	}

	public function post_settings()
	{
		$validation = Validator::make( Input::all(), static::$settings_rules );

    	if ($validation->fails()){
			return Redirect::to('users/settings')->with_errors($validation->errors);
		}

    	$user = User::find(Auth::user()->id);
    	$user->firstname = Input::get('firstname');
    	$user->lastname = Input::get('lastname');
    	$user->city = Input::get('city');
    	$user->country = Input::get('country');
    	$user->profession = Input::get('profession');
    	$user->save();

	    return Redirect::to('users/settings')->with('success', 'Your Profile has been Successfully Updated!');
	}



}