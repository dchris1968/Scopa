<!DOCTYPE html>
<html>
<head>
	<title>My Scopa App</title>
	<meta charset="utf-8" />
</head>

<body>
	<?php
	
<<<<<<< HEAD
=======
		// for($i = 0; $i < count($game->player1Hand); $i++)
// 		{
// 			echo $game->player1Hand[$i]->faceVal;
// 			switch($game->player1Hand[$i]->suit)
// 			{
// 				case 0: echo "clubs<br/>";
// 					break;
// 				case 1: echo "swords<br/>";
// 					break;
// 				case 2: echo "coins<br/>";
// 					break;
// 				case 3: echo "cups<br/>";
// 					break;
// 				default: echo "ERROR<br/>";
// 					break;
// 			}
// 		}
		
		
		
>>>>>>> e82faf5222ffb72c4a5cee30924c18ee217bed44
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




