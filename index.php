<!DOCTYPE html>
<html>
<head>
	<title> Calculator</title>
</head>
<body>
		<form name="calculator" method = "post" action="process.php" >
			Number1=<input type="textfield" name="number1" value="">
			<br>
			Number2=<input type="textfield" name="number2" value="">
			<br>
			<select name="action">
				<option value="add">Add</option>
				<option value="sub">Subtractor</option>
				<option value="multiply">Multiply</option>
				<option value="divied">Divied</option>
				<option value="modulus">%</option>
			</select>
			<br><br>
			<input type="submit" name="submit" value="submit"> 
			<br><br>
			<!--calculate=<input type="calculate" value="<?php echo $result;?>">
			-->
		</form>

</body>
</html>
