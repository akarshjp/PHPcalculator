<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="1.css">
			<title></title>
	</head>
	<body style="background-color: #9AECDB;">
		<div class="BOX">
			<h1>CALCULATOR</h1>
			<form>
				<input type="text" name="num1" placeholder="Number 1">
				<br>
				<select name="operator">
					<option>NONE</option>
					<option>SIN</option>
					<option>COS</option>
					<option>TAN</option>
					<option>EXP</option>
					<option>LOG</option>
				</select>
				<br>
			<div>
				<button class="cal" type="submit" name="submit" value="submit">Calculate
				</button>
			<div>
			</form>

		<p><strong>The Answer is:</strong></p>
		<?php
			if(isset($_GET['submit']))
			{
				$num1=$_GET['num1'];
				$operator=$_GET['operator'];

					switch($operator)
					{
						case "SIN":
							echo sin($num1);
							break;
						case "COS":
							echo cos($num1);
							break;
						case "TAN":
							echo tan($num1);
							break;
						case "EXP":
							echo exp($num1);
							break;
						case "LOG":
							echo log($num1);
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