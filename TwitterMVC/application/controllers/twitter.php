<?php

class Twitter_Controller extends Base_Controller {

	public function action_add(){

		return View::make('twitterpage');
	}

	public function action_adduser(){

		$searchUserName = Input::get('username');
		$searchUserName = urlencode($searchUserName);
		$searchRealName = Input::get('realname');
		$searchRealName = urlencode($searchRealName);
		UpdateTwitter::all($searchUserName, $searchRealName);
		echo "Successfully added username ".$searchUserName;
		echo "<br><a href=".URL::to ('twitter')."> Search for current Twitter users in database</a>";
	}
	public function action_index(){
		//$usernames = UpdateTwitter::getData('username');
		//$realnames = UpdateTwitter::getData('realname');
		$data = UpdateTwitter::getData();
		//echo $usernames;
		//echo $realnames;
		 $returndata = array(
		 	//'user_name' => $usernames,
		 	//'real_name' => $realnames
		 	'returnedusers' => $data
		 );
		return View::make('home.search', $returndata);
	}

	public function action_results(){
		$searchID = Input::get('userID');
		$searchID = urlencode($searchID);

		$Twitter = new Twitter($searchID);
		$Tweets = $Twitter->SearchForUser($searchID);

		$data = array(
			'ID' => $searchID,
			'tweets' => $Tweets
		);
					// echo HTML::image('img/01_background.jpg');//, $alt_text);
		return View::make( 'home.results', $data);
	}
}