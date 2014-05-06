<!DOCTYPE html>
<html>
<head>
	<title>My Scopa App</title>
	<meta charset="utf-8" />
</head>

<body>
	<?php

		if(isset($_POST['playGame']))
		{
			include('Card.php'); 
			include('Deck.php');
			include('Game.php');

			$game = new Game();	
			//echo "The button worked";
			
			//attempt to take a card from p1 hand
			$temp = array_pop($game->player1Hand);
			
			//pushes card from p1 to table
			array_push($game->tableCards, $temp);
			
			//simulates 2 dealing rounds to test if deck is decrementing
			$game->deal();
			$game->deal();
			
			//displays deck
			Deck::showDeck($game->deck->cards);
		}
	
	?>
	
	<form method= "post">
	<input type="submit" name="playGame" value= "play game" />
	</form>
	
</body>
</html>




