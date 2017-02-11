<?php
session_start();
include_once("class/math.php");
        $n1=$_POST['number1'];
        $n2=$_POST['number2'];

            for($i=$n1; $i<=$n2;$i++)
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
            echo " are prime numbers between $n1 and $n2.";

if(isset($_POST)){
		
		$math = new Math($_POST);
		if(count($math -> error) > 0){
			$_SESSION['errors'] = $math->error;
			header('location:index.php');

			die;
		}else{
            $_SESSION['errors'] = '';
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