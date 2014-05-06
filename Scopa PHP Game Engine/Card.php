<?php
	Class Card
	{
		//yet to figure out point system for card 
		public $ptValue = 0;
		public $suit;
		public $faceVal;
	
		function __construct($j, $i)
		{
			$this->faceVal = $j+1;
			$this->suit = $i;
		}
	}
?>