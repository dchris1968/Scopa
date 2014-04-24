<!DOCTYPE html>
<html>
<head>
	<title>My Scopa App</title>
	<meta charset="utf-8" />
</head>

<body>
	<?php
		//exfiltration - removing information from a system
		//harvesting - getting data from a network
	
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
		
		
		
		if(isset($_POST['playGame']))
		{
			include('Card.php'); 
			include('Deck.php');
			include('Game.php');

			$game = new Game();	
			echo "The button worked";
			
			$temp = array_pop($game->player1Hand);
	
			array_push($game->tableCards, $temp);
	
			$game->deal();
			$game->deal();
			Deck::showDeck($game->deck->cards);
		}
	
	?>
	<form method= "post">
	<input type="submit" name="playGame" value= "play game" />
	</form>
</body>
</html>




