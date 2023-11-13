<?php

Class FoodMenu {
	
	private $foods = array(
		1 => 'Nasi Goreng',  
		2 => 'Kwee Tiauw Goreng',  
		3 => 'Mie Goreng Jawa',  			
		4 => 'Mie Kuah',  			
		5 => 'Ta Mie',  
		6 => 'Lo Mie');
		
	public function getFoods(){
		return $this->foods;
	}
	
	public function getFood($id){
		
		$food = array($id => ($this->foods[$id]) ? $this->foods[$id] : $this->foods[1]);
		return $food;
	}	
}
?>