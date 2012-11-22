<?php

require 'remoteconnector.php';

class Twitter extends RemoteConnector {

	public function __construct(){

	}

	public static function SearchForUser($userID){
		$userID = urlencode($userID);
		$url = "http://api.twitter.com/1/statuses/user_timeline.json?screen_name=$userID";
		$jsonString = file_get_contents($url);
		$arrayOfTweets = json_decode($jsonString);
		return $arrayOfTweets;
	}
}