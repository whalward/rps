<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="keywords" content="Rock Paper Scissors">
		<meta name="description" content="Rock Paper Scissors">
		
		<title>Rock Paper Scissors</title>
		
		<link rel="stylesheet" href="style.css">
	</head>
	
	<body>
		<h1>Rock Paper Scissors Game</h1>
		
		<?php
			$choice = substr(filter_input(INPUT_POST, 'choice', FILTER_SANITIZE_NUMBER_INT),0,1);
			$computer = mt_rand(0,2);
		
		
			if ($choice == 0)
				echo "<p><img src=\"images/paper1.png\" alt=\"Photo of players hand which is Paper\">&nbsp;";
			elseif ($choice == 1)
				echo "<p><img src=\"images/rock1.png\" alt=\"Photo of players hand which is Rock\">&nbsp;";
			elseif ($choice == 2)
				echo "<p><img src=\"images/scissors1.png\" alt=\"Photo of players hand which is Scissors\">&nbsp;";
		
			if ($computer == 0)
				echo "<p><img src=\"images/paper2.png\" alt=\"Photo of Computers hand which is Paper\"></p>";
			elseif ($computer == 1)
				echo "<p><img src=\"images/rock2.png\" alt=\"Photo of Computers hand which is Rock\"></p>";
			elseif ($computer == 2)
				echo "<p><img src=\"images/scissors2.png\" alt=\"Photo of Computers hand which is Scissors\"></p>";
			
			if ($choice == $computer)
				echo "<p>It's a draw.</p>";
			elseif ($choice == 0 and $computer == 1)
				echo "<p>You Win.</p>";
			elseif ($choice == 0 and $computer == 2)
				echo "<p>You Lose.</p>";
			elseif ($choice == 1 and $computer == 0)
				echo "<p>You Lose.</p>";
			elseif ($choice == 1 and $computer == 2)
				echo "<p>You Win.</p>";
			elseif ($choice == 2 and $computer == 0)
				echo "<p>You Win.</p>";
			elseif ($choice == 2 and $computer == 1)
				echo "<p>You Lose.</p>";
			
			
		?>
	</body>
</html>