<?php
include_once("class/math.php");
	if(isset($_POST)){
		
		$math = new Math($_POST);
		if(count($math -> error) > 0){
			print_r($math -> error);
			die;
		}else{
			$action = (!empty($_POST['action'])) ? $_POST['action']:'';
		}
	}
switch ($action){
	case "add":
		echo $result = $math->add(); die;
		break;
	case "sub" :
		$result = $math->sub();
		break;
	case "multiply":
		$result = $math -> multiply();
		break;
	case "divied":
		$result = $math -> divied();
		break;
	case "modulus":
		$result = $math -> modulus();
		break;
}
echo $result;

?>