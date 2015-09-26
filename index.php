<!DOCTYPE html>
<html>
	<head>
		<title>Guessing Game</title>
		<style>
			body {
				background: #F3FFE2;
				font-family: "Trebuchet MS", Helvetica, sans-serif;
				color: #225378;
				text-align: center;
				}
			h1, .message { color: #EB7F00;}
			.bold { font-weight: 800;}
		</style>
	</head>
	<body>
		<form name="evaluation" method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
			<h1>Guessing Game</h1>
			<h3>I'm thinking of a number between 1 and 10..</h3>
			<h4>Guess my number!</h4>
			<select name="number">
				<option name="1" value="1">1</option>
				<option name="2" value="2">2</option>
				<option name="3" value="3">3</option>
				<option name="4" value="4">4</option>
				<option name="5" value="5">5</option>
				<option name="6" value="6">6</option>
				<option name="7" value="7">7</option>
				<option name="8" value="8">8</option>
				<option name="9" value="9">9</option>
				<option name="10" value="10">10</option>
			</select>
			<input type="submit" name="submit" value="Guess">
		</form>
		
		<?php
			$secretNumber = "4";
			$guess = $_POST["number"];
			
			
			if(isset($_POST['submit']))
			{
				echo "<br>Your guess was " . $guess . ".<br>";
				
				if($guess == $secretNumber){
					echo "<h3 class=message>YOU WIN!</h3>";
				}
				if($guess < $secretNumber){
					echo "<h4 class=message>That number is too low.</h4>";
				}
				if($guess > $secretNumber){
					echo "<h4 class=message>That number is too high.</h4>";
				}
				
			}
		?>
	</body>
</html>