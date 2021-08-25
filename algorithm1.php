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
			<h3 align="center">Question 1</h3>
			
			<h4>Function Description </h4>

			<p>Complete the sock merchant function in the editor below. It must return an integer representing the number of matching pairs of socks that are available. Sock Merchant has the following parameter(s): </p>
			<ul>
				<li>n : the number of socks in the pile</li> 
				<li>ar : the colors of each sock</li>
			</ul>

			<h4>Input Format </h4>
			<p>The first line contains an integer n , the number of socks represented in ar .
				The second line contains n space-separated integers describing the colors ar [ i ] of the
			socks in the pile.</p>
			
			<h4>Constraints </h4>
			1 ≤ n ≤ 100   <br>
			1 ≤ ar [ i ] ≤ 100 where 0 ≤ i < n <br>

			<h4>Output Format </h4>
			<p>Return the total number of matching pairs of socks that Nick can sell.</p>


			<form action="" method="post">
				<div class="form-control">
					<label>List Sock (Separated by spaces)</label>
					<input type="text" class="form-control" name="listSock" required>
				</div>
				<br>
				<button class="btn btn-primary" name="sockButton">Submit</button>
			</form>
			<?php

			if(isset($_POST['sockButton'])){

				$arr=explode(" ",$_POST['listSock']);
				echo sockPair($arr);
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

	<?php
/*KULINA INTERVIEW TEST

QUESTION 1 (FUNCTION DESCRIPTION)

*/ 

function sockPair($arr){
	$output='';
	$output.="<h2>Input:</h2>";
	$output.="<br>n = ".count($arr)."<br>";
	$output.="<br>arr sock:".var_dump($arr)."<br><br>";

	$output.="Output:<br>";
	$sock=[];

	for ($i=0; $i < count($arr); $i++) { 
		if(!isset($sock[$arr[$i]])){
			$sock[$arr[$i]]=1;
		}else{
			$sock[$arr[$i]]=$sock[$arr[$i]]+1;
		}
	}

	$totalPair=0;
	foreach ($sock as $key => $value) {
		$pair=intval($value/2);
		$output.="Sock ".$key.' = '.$value." Pcs or ".$pair." Pair<br>";
		$totalPair=$totalPair+intval($value/2);
	}

	$output.="total number of matching pairs = ".$totalPair;

	return $output;
}
?>