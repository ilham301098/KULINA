<!doctype html>
	<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

		<title>Kulina Interview</title>
	</head>
	<body>

		<?php include('navbar.php'); ?>

		<div class="container mt-3 mb-5">

			<h1 align="center">Basic Algorithm</h1>
			<h3 align="center">Question 3</h3>
			
			<h4>Function Description </h4>

			There is an input number: 1.345.679<br>
			Write pseudo code (use GoLang ) that produces following output:<br>
			1000000<br>
			300000<br>
			40000<br>
			5000<br>
			600<br>
			70<br>
			9<br>

			<br>
			<h4>Answer:</h4>

			1. Import package <br>
			2. Get number from user input (Ex: 1345679)<br>
			3. Number validation<br>
			4. convert number to char/string<br>
			5. explode string to char array named Number<br>
			6. Define array length (n=7)<br>
			8. looping from array Number<br>
			9. for each iteration, get the array index+1 to define how much '0' to write<br>
			Example: <br>
			- iteration 1 : Number 1 is located in index+1 or 1, so the formula to define 0 is (n-(index+1)) equals 6, so write 1000000<br>
			- iteration 2 : (7-(1+1))=5 , so write 300000<br>
			- iteration 3 : (7-(2+1))=4 , so write 40000<br>
			...<br>
			- iteration 7 : (7-(5+1))=1 , so write 70<br>
			- iteration 8 : (7-(6+1))=0 , so write 9<br>

		</div>

			
<footer>
	<div align="center">
		<h4>By Muhammad Ilham Akbar</h4>
	</div>
</footer>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

	</body>
	</html>
