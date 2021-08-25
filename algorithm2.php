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
			<h3 align="center">Question 2</h3>


			<h4>Function Description </h4>

			<p>Complete the countingValleys function in the editor below. It must return an integer that denotes the number of valleys Gary traversed. countingValleys has the following parameter(s): </p>
			<ul>
				<li>n : the number of steps Gary takes</li> 
				<li>s : a string describing his path</li>
			</ul>

			<h4>Input Format </h4>
			<p>The first line contains an integer n , the number of steps in Gary's hike. The second line contains a single string s , of n characters that describe his path.</p>
			
			<h4>Constraints </h4>
			2 ≤ n ≤ 10⁶  <br>
			s[i] ∈ { U D }<br>

			<h4>Output Format </h4>
			<p>Print a single integer that denotes the number of valleys Gary walked through during his	hike.</p>


			<form action="" method="post">
				<div class="form-control">
					<label>characters that describe his path (Separated by spaces)</label>
					<input type="text" class="form-control" name="listPath" required>
				</div>
				<br>
				<button class="btn btn-primary" name="countButton">Submit</button>
			</form>
			<?php

			if(isset($_POST['countButton'])){

				$input=strtoupper($_POST['listPath']);

				$arr=explode(" ",strtoupper($_POST['listPath']));

				echo "<h3>Path: ".$input."</h3>";

				echo "<h2>Answer:</h2>";


				echo "Sum of Valley = ".countValley($arr);
			}

			function countValley($arr){
				$valley=0;
				for ($i=0; $i < count($arr); $i++) { 
					if($arr[$i]=='D'){
						$valley++;
					}else{
						$valley--;
					}
				}
				return $valley;
			}


			?>

		</div>

			
<footer>
	<div align="center">
		<h4>By Muhammad Ilham Akbar</h4>
	</div>
</footer>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

	</body>
	</html>
