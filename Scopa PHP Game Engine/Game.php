<?php
	Class Game
	{
		public $deck;
		public $player1Hand = array();
		public $player2Hand = array();
		public $tableCards = array();
		public $player1Collected = array();
		public $player2Collected = array();
		
		//instantiates new deck
		//shuffles deck
		//deals to players
		//deals to table upon game initialization
		//allows connection to other member variables in class
		function __construct()
		{
			$this->deck = new Deck();
			shuffle($this->deck->cards);
			$this->player1Hand = $this->player1Hand;
			$this->player2Hand = $this->player2Hand;
			$this->tableCards = $this->tableCards;
			$this->player1Collected = $this->player1Collected;
			$this->player2Collected = $this->player2Collected;
			$this->deal();
			//Deck::showDeck($this->deck->cards);
			$this->dealToTable();
			//Deck::showDeck($this->deck->cards);
		}
		
		//may not need getters and setters at all?
		public function getPlayer1Hand()
		{
			return $this->player1Hand;
		}
		
		public function setPlayer1Hand($p1Hand)
		{
			$this->player1Hand = $p1Hand;
		}
		
		public function getPlayer2Hand()
		{
			return $this->player2hand;
		}
		
		public function setPlayer2Hand($p2Hand)
		{
			$this->player2Hand = $p2Hand;
		}
		
		public function getTableCards()
		{
			return $this->tableCards;
		}
		
		public function setTableCards($tblCards)
		{
			$this->tableCards = $tblCards;
		}
		
		//deals 3 cards from bottom of deck to p1
		//deals 3 cards from bottom of deck to p2
		public function deal()
		{
			for($i=0; $i<3; $i++)
			{
				$temp = array_pop($this->deck->cards);
				$this->player1Hand[$i] = $temp;
			}
			for($j=0; $j<3; $j++)
			{
				$temp = array_pop($this->deck->cards);
				$this->player2Hand[$j] = $temp;
				
			}
			//break tag inserted for visual aide
			echo "<br/>";
		}
		
		//deals 4 cards from bottom of deck to table
		public function dealToTable()
		{
			for($j=0; $j<4; $j++)
			{
				$temp = array_pop($this->deck->cards);
				$this->tableCards[$j] = $temp;
				
			}
			//break tag inserted for visual aide
			echo "<br/>";
		}
	}
	
?>