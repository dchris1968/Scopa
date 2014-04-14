<?php
	Class Card
	{
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