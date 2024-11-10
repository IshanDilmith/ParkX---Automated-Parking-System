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

		<div class="formgroup">
			
			<form method="post" action="submitEditProfile.php">

				<h1>Edit account</h1>

				<img src="images/homepp.jpg" alt="Profile picture" class="profilep2"><br><br>

				<label for="fName">First Name :</label><br>
				<input type="text" name="fName2" placeholder="First Name" required><br><br>

				<label for="lName">Last Name :</label><br>
				<input type="text" name="lName2" placeholder="Last Name" required><br><br>

				<label for="email">E-mail :</label><br>
				<input type="email" name="email2" placeholder="abc@example.com" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" required><br><br>

				<label for="contact">Contact no :</label><br>
				<input type="number" name="contact2" placeholder="07xxxxxxx" required><br><br>

				<label for="dob">Date of birth :</label><br>
				<input type="date" name="dob2" required><br><br>

				<label for="address">Address :</label><br>
				<textarea type="text" name="address2" rows="8" cols="30" required></textarea><br><br>

				<label for="newPw">New password :</label><br>
				<input type="password" name="newPw2" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required><br><br>

				<label for="tandc">Accept terms and conditions</label>
				<input type="checkbox" name="tandc" id="tandc" onclick="enableButton()"><br><br>
				
				<center>
					<input name="insert1" type="submit" id="submitBtn" value="Edit account" disabled><br>
					<a class="deletacc" onclick="confirmDelete()" >Delete</a>
				</center>

				<br><br>

			</form>
			
		</div>

		

	

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