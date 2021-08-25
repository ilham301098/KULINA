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

			<h2 align="center">Basic Coding</h2>
			
			<p>Imagine you’re working in a company and you’re told to make a design system and transaction	flow. How would you make the most suitable for following users and case:</p>

			<h4>User Side</h4>
			<ul>
				<li>User register</li>
				<li>User input the address</li>
				<li>User choose the products to be purchased with subscription and/or one-time purchase
				scheme</li>
				<li>User pay the bill</li>
				<li>User skip the delivery due to certain reasons (ex: They have other agenda that prevent them to receive the delivered goods)</li>
				<li>User cancel the order</li>
			</ul>

			<h4>Supplier Side</h4>
			<ul>
				<li>Supplier register as seller</li>
				<li>Supplier create the store and complete the address</li>
				<li>Supplier create products that can be purchased either daily or one-time purchase</li>
				<li>Supplier determine the price of each product</li>
				<li>Supplier determine the selling area</li>
			</ul>

			<h4>Additional:</h4>
			<ul>
				<li>If a product can be sold by more than one seller, define the correct algorithm to determine which order to be sent from which seller (assuming the closest mileage and
				route)!</li>
				<li>There is a cut-off time everyday, which is the latest time an order can be placed for the	next day delivery. All orders placed beyond cut-off time will automatically delivered on the day after tomorrow.</li>
			</ul>

			<h3>Answer:</h3>

			<img src="basic_coding.png" width="100%">

		</div>

			
<footer>
	<div align="center">
		<h4>By Muhammad Ilham Akbar</h4>
	</div>
</footer>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

	</body>
	</html>
