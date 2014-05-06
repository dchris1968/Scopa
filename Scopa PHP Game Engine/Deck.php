<?php 
	Class Deck
	{
		public $suit = array('clubs', 'swords', 'coins', 'cups');
		public $faceVal = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

		public $cards = array();
		
		
		function __construct()
		{
			for($i=0; $i<count($this->suit); $i++)
			{
				for($j=0; $j<count($this->faceVal); $j++)
				{
					$index = $i*10 +$j;
					$cards[$index] = new Card($j, $i);
				}
			}
			$this->cards = $cards;
		}
	
		static function showDeck($deck)
		{
			//break tags inserted for visual aide
			echo "This is the current deck.<br/>";
			for($k=0; $k<count($deck); $k++)
			{
				echo $deck[$k]->faceVal;
				$suit = $deck[$k]->suit;
				switch($suit)
				{
					case 0: echo "clubs<br/>";
						break;
					case 1: echo "swords<br/>";
						break;
					case 2: echo "coins<br/>";
						break;
					case 3: echo "cups<br/>";
						break;
					default: echo "ERROR<br/>";
						break;
				}
			}
			echo "<br/>";
		}
	}
?>