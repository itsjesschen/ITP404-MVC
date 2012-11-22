<!doctype html>
<html>
<head>
	<title> Find Twitter users </title>
</head>

<body>
	<h2> Find Twitter Users</h2>

	<form action ="<?php echo URL::to ('twitter/adduser') ?>" method = "post">
		<label> Twitter User Name</label>
		<input type="text" name="username"/>
		<label> Twitter Real Name</label>
		<input type="text" name="realname"/>
		<input type="submit"/>
	</form>
	<a href="<?php echo URL::to ('twitter')?>">or search for already added users here</a>

</body>
</html>