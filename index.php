<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title> Calculator</title>
</head>
<body>

<?php
    if (!empty($_SESSION['error'])) {
       print_r($_SESSION['error']);
    }
?>
		<form name="calculator" method = "post" action="process.php" >
			Number1=<input type="text" name="number1" value="" />
			<br>
			Number2=<input type="text" name="number2" value="" />
			<br>
			<select name="action">
				<option value="add">Add</option>
				<option value="sub">Subtractor</option>
				<option value="multiply">Multiply</option>
				<option value="divied">Division</option>
				<option value="modulus">%</option>
                <option value="prime_no">Prime No.</option>
                <option value="even_no">Even No.</option>
                <option value="odd_no">Odd No.</option>
                <option value="square_root">Square Root</option>
                <option value="date">Get Date Difference</option>
			</select>
			<br><br>
			<input type="submit" name="submit" value="submit">
            <br><br>
			<!--calculate=<input type="calculate" value="<?php echo $result;?>">
			-->
		</form>

</body>
</html>
