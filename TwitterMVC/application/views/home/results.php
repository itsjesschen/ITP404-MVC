<!doctype html>
<html> 
<head>
	<title>Twitter Search Results</title>
</head>
<body>
	<p> You searched for <?php echo "".$ID?></p>
	<div id="results">		
			<?php 
			echo HTML::style('css/styles.css');
			foreach ($tweets as $tweet){
				echo '<li>';
				echo '<img src="'.$tweet->user->profile_image_url.'" />';
				echo $tweet->text;
				echo '<div class="date">'.$tweet->created_at.'</div>';
				echo '<div style="clear:both;"></div>';
				echo '</li>';
			}
			?>
	</div>
</body>

</html>