<html>
	<head>
        <link rel="stylesheet" type="text/css" href="css/HeaderFooter.css">	<!--header and footer css-->
		<link rel="stylesheet" type="text/css" href="css/retrieve.css">	<!--retrieve page css-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	<!--Social Media icons-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;700&family=Manrope:ital,wght@0,400;0,700&display=swap">	<!--Manrope font style-->
		<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">	<!--Roboto font style-->
        <title>ParkX.com</title>
	</head>

	<body>
		<div class="getleft">	<!--logo-->
			<div class="image">
				<img src="images/ParkXlogo.png" alt="ParkX logo" class="logo">
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

        <main>  <!--Main body start-->
			<br>
			<div class="container-datetime">
				<button class="showbutton" onclick="hidetime('block')">Show Date and Time</button>
				<button class="hidebutton" onclick="hidetime('none')"><img src="images/hide.png" width="45" height="45"></button>
			</div>
			<div id="timeshowing" style="display: none;">
				<form class="timeanddate">
					<script>	//java script for get time
						const currentDate = new Date();
						const currentTime = currentDate.toTimeString();
	
						// Display date and time
						document.write('<div class="date">Current Date: '+ currentDate.toDateString()+'<br>'+'</div>');
						document.write('<div class="time">Current Time: '+ currentTime+'</div>');
					</script>	<!--script end-->
				</form>
			</div>
			
			<script>	//java script to display and hide
				function hidetime(displayType) {
					document.getElementById("timeshowing").style.display = displayType;
				}
			</script>	

			<br><br><br><br><br><br><br>

			<div class="left-pad">	<!--Form start-->
				<form method="post" id="ret_form" action="retrieveVehiDb.php">
					<h1><legend><center>Retrieve Your Vehicle</center></legend></h1>
					<label>Reserved ID : </label><br>
					<input type="text" name="resID" placeholder="1221" required><br><br>
					<label>Check Out Time : </label><br>
					<input type="time" name="out_Time" value="13:20" required><br><br>
					<input type="submit" name="retVehicle" value="Retrieve Vehicle" id="retieveBtn">
				</form>
			</div>	<!--Form end-->

			<div class="left-pad">
				<form method="post" id="showdetail" >
					<h1><legend><center>Check Your Reservation History</center></legend></h1>
					<label>Enter Your Lisense Plate number : </label>
					<input type="text" name="linum" placeholder="1221" required>
					<input type="submit" name="seedetail" value="Submit Details" id="seedetail">
				</form>
				<br><br><br>
				<?php
					require 'Config.php';

					if ($_SERVER["REQUEST_METHOD"] == "POST") {
						if (isset($_POST["linum"])) {
							$liNum = $_POST["linum"];

							// Sanitize the input to prevent SQL injection, without any interruption
							$reqliNum = mysqli_real_escape_string($conn, $liNum);

							// select the details for liNum
							$sql4 = "SELECT li_Num, inDate, in_Time 
							FROM reservation 
							WHERE li_Num = '$reqliNum'";
							$result = $conn->query($sql4);

							if ($result) {
								if ($result->num_rows > 0) {
									echo'<form class="userDis"><h1><legend><center>Your Reservation History</center></legend></h1>';
									// output data of each row
									while ($row = $result->fetch_assoc()) {
										echo '<div class="dis_info">License Number: ' . $row["li_Num"] . '   |   Reserved Date: ' . $row["inDate"] . '   |   Checked In Time: ' . $row["in_Time"] . '</div>';
									}
									echo'</form>';
								} else {
									echo "No Reservations Found";	
								}
							} else {
								echo "Error: " . $conn->error;	//display if any connection error
							}
						}
					}

					// close the connection
					$conn->close();
				?>
			</div>

	
        </main> <!--Main body end-->

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