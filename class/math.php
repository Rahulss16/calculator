<?php
class Math{
	public $number1=0;
	public $number2=0;
	public $result;
	public $error = array();
	public function __construct($post){
		
		if(!empty($post['number1'])){
			$this->number1 = $post['number1'];
		}else{
			$this->error[] = 'please enter number1';
		}
		if(!empty($post['number2'])){
			$this->number2 = $post['number2'];
		}else{
			$this->error[] = 'please enter number2';
		}
	}

	function add() {
		$result=$this->number1 + $this->number2;
		return $result;
	}
	function sub() {
		$result=$this->number1 - $this->number2;
		return $result;
	}
	function multiply() {
		$result=$this->number1 * $this->number2;
		return $result;
	}
		function divied() {
		$result=$this->number1 / $this->number2;
		return $result;
	}
		function modulus() {
		$result=$this->number1 % $this->number2;
		return $result;
	}
}

?>