<?php
	Class Game
	{
		public $deck;
		public $player1Hand = array();
		public $player2Hand = array();
		public $tableCards = array();
		public $player1Collected = array();
		public $player2Collected = array();
		
		function __construct()
		{
			$this->deck = new Deck();
			shuffle($this->deck->cards);
			$this->player1Hand = $player1Hand;
			$this->player2Hand = $player2Hand;
			$this->tableCards = $tableCards;
			$this->player1Collected = $player1Collected;
			$this->player2Collected = $player2Collected;
			$this->deal();
			//Deck::showDeck($this->deck->cards);
			$this->dealToTable();
			//Deck::showDeck($this->deck->cards);
		}
		
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
			echo "<br/>";
		}
		
		public function dealToTable()
		{
			for($j=0; $j<4; $j++)
			{
				$temp = array_pop($this->deck->cards);
				$this->tableCards[$j] = $temp;
				
			}
			echo "<br/>";
		}
	}
	
?>