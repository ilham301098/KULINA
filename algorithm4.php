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
			<h3 align="center">Question 4</h3>
			

			<p>Andrew walks through 100 switches from point A to point B with 1 to 100 as the number. At the first trip, Andrew presses all of the switches so lamps are on. Second trip, Andrew only presses switches that multiplying of two. The next trip, Andrew presses switches that multiplying of three. Andrew repeats his trips from A to B for 100 times. Write down the code to determine how many lamps will turn on after 100 trips from A to B.</p>
			


			<form action="" method="post">
				<div class="form-control">
					<label>Total Lamp</label>
					<input type="number" min="0" class="form-control" name="totalLamp" required>
				</div>
				<br>
				<button class="btn btn-primary" name="lampButton">Submit</button>
			</form>

			<?php

			if(isset($_POST['lampButton'])){

				$output='';
				$total=$_POST['totalLamp'];
				$lamp=[];
			//1= Lamp on / 0 = Lamp Off
				for ($i=1; $i <= $total; $i++) { 
					if($i==1){
						for ($j=0; $j < $total; $j++) { 
						//Set All lamp to on
							$lamp[$j]=1; 
						}
					}else{
						for ($k=1; $k < $total; $k++) { 
							if($k%$i==0){
								if($lamp[$k]==0){
									$lamp[$k]=1;
								}else{
									$lamp[$k]=0;
								}	
							}
						}
					}
				}

				$output.= "<br><h3>Lamp Status</h3>";
				$lampOn=0;
				for ($i=0; $i < $total; $i++) {
					$stat='Off'; 
					if($lamp[$i]==1){ 
						$stat='On';
						$lampOn++;
					}
					$lampIndex=$i+1;
					$output.="<br>Lamp $lampIndex is $stat";
				}

				$lampOff=$total-$lampOn;

				$output.="<br><br>Total Lamp = $total Lamp";
				$output.="<br>Total Lamp ON = $lampOn Lamp";
				$output.="<br>Total Lamp OFF = $lampOff Lamp";
				echo $output;
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
