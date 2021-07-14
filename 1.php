<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="1.css">
			<title>BINARY</title>
	</head>
	<body style="background-color: #9AECDB;">
		<div class="BOX">
			<h1>CALCULATOR</h1>
			<form>
				<input type="text" name="num1" placeholder="Number 1">
				<br>
				<input type="text" name="num2" placeholder="Number 2">
				<br>
				<select name="operator">
					<option>NONE</option>
					<option>SUBTRACT</option>
					<option>MULTIPLY</option>
					<option>DIVIDE</option>
					<option>ADD</option>
				</select>
				<br>
				<button class="cal" type="submit" name="submit" value="submit">Calculate
				</button>
			</form>

		<p><strong>The Answer is:</strong></p>
		<?php
			if(isset($_GET['submit']))
			{
				$num1=$_GET['num1'];
				$num2=$_GET['num2'];
				$operator=$_GET['operator'];

					switch($operator)
					{
						case "ADD":
							echo $num1 + $num2;
							break;
						case "SUBTRACT":
							echo $num1-$num2;
							break;
						case "MULTIPLY":
							echo $num1*$num2;
							break;
						case "DIVIDE":
							echo $num1/$num2;
							break;
						case "NONE":
							echo "Select an operator";
							break;
					}
			}
?>
	</div>
	</body>
</html>