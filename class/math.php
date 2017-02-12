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
		if(!empty($post['number2']) || $post['action'] == 'square_root'){
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
	    function prime_no(){
          for($i=$this->number1; $i<=$this->number2;$i++)
            {
                if($i==2 || $i==3 || $i==5 || $i==7)
                {
                    echo " $i";
                }
                else if(($i%2)!= 0 &&($i%3)!=0 && ($i%5)!=0 && ($i%7)!=0)
                {
                    echo " $i";
                }
                else
                    continue;
            }
            echo " are prime numbers between $this->number1 and $this->number2.";
        }
        function even_no(){
            for($i=$this->number1; $i<=$this->number2;$i++) {
                if (($i % 2) == 0) {
                    echo $i." <br> ";
                }
                 else
                    continue;
            }
            echo " are even numbers between  $this->number1 and $this->number2.";
	    }
	    function odd_no(){
            for ($i=$this->number1;$i<=$this->number2;$i++){
                if (($i % 2)!=0){
                    echo $i."<br>";
                }else
                    continue;
            }
            echo " are odd numbers between $this->number1 and $this->number2 .";
        }
        function square_root(){
            echo sqrt($this->number1) . "<br>";
	        echo "is square root of $this->number1 ";
        }
        function date(){
            $date1=date_create("$this->number1");
            $date2=date_create("$this->number2");
            $diff=date_diff($date1,$date2);
            echo $diff->format("%R%a days");
        }
}

?>