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

			<h1 align="center">Basic Concepts</h1>

			<h2>Coding</h2>

			<ol>
				<li>Give an example of code smell (1) that usually happened in OOP. Explain and give the preventive action</li>
				<textarea class="form-control" disabled>An OOP script always starts with class initiation with a constructor and is followed by global variables if any. In general, there are 2 properties of variables and functions in OOP, namely public and private. As the name implies, public variables/functions can be accessed and used by other classes in contrast to private variables/functions that can only be used in that class.</textarea>
				
				<li>Explain briefly about Dependency Injection, and why is it important ?</li>
				<textarea class="form-control" disabled>The goal of the dependency injection technique is to remove this dependency by separating the usage from the creation of the object. This reduces the amount of required boilerplate code and improves flexibility.</textarea>
			</ol>

			<h2>Rest API</h2>
			<p>Give 1 example each, of what do’s and don’ts when you handle request while using these method :</p>
			<ul>
				<li>POST</li>
				<div class="row">
					<div class="col-md-6">
						<label>Do</label>
						<ul>
							<li>Record any data log (Ex: Timestamp data changed,saved or delete )</li>
							<li>Always use token validation first before post any data</li>
							<li>Validate data before inserting to database</li>
							<li>Validate the user (depend the user role) before execute</li>
							<li>Use existing method to secure any variabel outsite the system</li>
						</ul>
					</div>
					<div class="col-md-6">
						<label>Don`t</label>
						<ul>
							<li>Display any data without validate the user</li>
							<li>Display any data without escaping special char/query</li>
						</ul>
					</div>
				</div>

				<li>GET</li>
				<div class="row">
					<div class="col-md-6">
						<label>Do</label>
						<ul>
							<li>Validate the user (depend the user role) before execute</li>
							<li>Record activity log (who accessing the information)</li>
						</ul>
					</div>
					<div class="col-md-6">
						<label>Don`t</label>
						<ul>
							<li>Display any data without validate the user</li>
							<li>Display any data without escaping special char/query</li>
						</ul>
					</div>
				</div>
			</ul>


		</div>


		<footer>
			<div align="center">
				<h4>By Muhammad Ilham Akbar</h4>
			</div>
		</footer>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

	</body>
	</html>
