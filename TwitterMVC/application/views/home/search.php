<!doctype html>
<html>
<head>
	<title>Twitter Search App</title>
</head>
<body>

	<div id = "container">
		<h1>Twitter Search Page</h1>
		<form action = "<?php echo URL::to('twitter/results') ?>" method = "get">
			<input type = "text" name="userID">
			<input type = "submit" value = "Search">
		</form>
	</div>

	<div id ="twitterusers">

		<?php 
			foreach($returnedusers as $tweeter){
			echo '<div class="Tweeters">';
			echo '<a href ="twitter/results?userID='.$tweeter->username.'">'.$tweeter->realname . ' (' . $tweeter->username . ')</a>';
			echo '</div>';
			}
		?>
	</div>
</body>
</html>