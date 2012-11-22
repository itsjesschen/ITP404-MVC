<?php

class UpdateTwitter{

	public static function all($username = null, $realname = null ){

		$query = DB::table('users')->insert_get_id(array(
			'username' => $username,
			'realname' => $realname
			));
	}

	public static function getData($parameter = null){
		$results = DB::table('users')->get();//->only($parameter);

		//$results = $query->get();
		return $results;
	}

}