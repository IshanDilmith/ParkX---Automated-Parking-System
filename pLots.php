<!DOCTYPE html>
<html>
	<head>
        <link rel="stylesheet" type="text/css" href="css/homepage.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <script src="js/myScript.js"></script>
		<title>ParkX.com</title>
	</head>

	<body>
		<div class="getleft">	<!--logo-->
			<div class="image">
			<img src="images\ParkXlogo.png" alt="ParkX logo" class="logo">
			</div>
		</div>
		<div class="container colornav topBotomBordersIn">	<!--navigation bar start-->
			
			<a href="index.html">Home</a>
			<a href="reservespotpage.php">Reserve a Parking Spot</a>
            <a href="retrive.php">Retrieve Vehicle</a>
            <a href="addFeedback.php">Feedback</a>
			<a href="aboutus.html">About Us</a>
			<a href="contactus.html">Contact Us</a>
		</div>	<!--navigation bar end-->

		<br>


		<center>

		<a href="editprofile.php"><img src="images\homepp.jpg" alt="Profile picture" class="profilep1"></a>

		<p id="greeting"></p>

		<p class="boxed-paragraph">Automated Car Parking - With the increasing demand of land for commercial purposes in urban areas, car parking spaces are becoming smaller and less freely available. As the innovators and leaders in the mobility sector, <b>ParkX</b> offers a range of customised automated car parking solutions from Automated Car Parking Solutions and Vehicle Elevators to Mechanical Car Parking Solutions. These systems are secure, efficient, convenient and financially beneficial in comparison to conventional parking. By enhancing your car park facilities, you can save space and eliminate the need of ramps, passenger elevators, etc.</p>

		<a href="packages.html"><button type="button" class="button" id="btn1">Packages</button></a>
		<a href="pLots.php"><button type="button" class="button" id="btn2">Parking Lots</button></a>
		<a href="cusreview.html"><button type="button" class="button" id="btn3">Customer Assistance</button></a>

		<br>

		<h2>Parking Lots</h2>

		<br>
		
		<?php
			require 'config.php';

			$sql = "SELECT * FROM parking_lots";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				// Output the data in an HTML table
				echo "<table class = 'twords1'>";
				echo "<tr><th>LotID</th><th>Location</th><th>Contact no</th></tr>";
				while ($row = $result->fetch_assoc()) {
					echo "<tr><td>" . $row["LotID"] . "</td><td>" . $row["Location"] . "</td><td>" . $row["Contact_no"] . "</td></tr>";
				}
				echo "</table>";
			} else {
				echo "No data found in the database.";
			}

			$conn->close();
		?>


		<br><br>

		<img src="images\map2.jpg" alt="map" class="btnImg">

		<br><br>

		</center>

		<!--footer section-->
		<footer>
			<div class="flex-container">	<!--container1-->
				<div class="ft-1">	<!--box1-->
					<table class="tablefont">
						<tr>
							<td>
								<p style="font-size: 17px;">Our Address:</p>
								<p class="onespace"> 25A/3, 5th street,</p>
								<p class="onespace"> R A De Mel Mawatha,</p>
								<p class="onespace"> Colombo.</p>
							</td>
							<td>
								<p style="font-size: 17px;">Email Us:</p>
								<p class="onespace"> ParkX@gmail.com</p>
								<p class="onespace"> ParkXmail@gmail.com</p>
								<p class="onespace"> ParkX.com</p>
							</td>
						</tr>
					</table>
				</div>
				<div class="ft-2">	<!--box2-->
					<center>
							<a href="index.html" class="linkspace">Home</a>
							<a href="reservespotpage.php" class="linkspace">Reserve a Parking Spot</a>
							<a href="retrive.php" class="linkspace">Retrieve Vehicle</a>
							<a href="addFeedback.php" class="linkspace">Feedback</a>
							<a href="aboutus.html" class="linkspace">About Us</a>
							<a href="contactus.html" class="linkspace">Contact Us</a>
					</center>
				</div>
				<div class="ft-3">	<!--box3-->
					<div class="sm-button">
						<a href="https://www.facebook.com" class="fa-icon-link"><i class="fa fa-facebook" style="font-size: 30px;"></i></a>
						<a href="https://www.twitter.com" class="fa-icon-link"><i class="fa fa-twitter" style="font-size: 30px;"></i></a>
						<a href="https://www.youtube.com" class="fa-icon-link"><i class="fa fa-youtube" style="font-size: 30px;"></i></a>
						<a href="https://www.instagram.com" class="fa-icon-link"><i class="fa fa-instagram" style="font-size: 30px;"></i></a>
					</div>
				</div>
			</div>
			<div class="flex-container3">	<!--container3-->
				<div><hr class="footer-hr"></div>
			</div>
			<div class="flex-container2">	<!--container2-->
				<div><center>ParkX &copy 2023 All rights reserved.</center></div>
			</div>
		</footer>
		<!--footer section end-->
	</body>

</html>