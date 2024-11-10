<?php
use Phppot\Member;

if (! empty($_POST["login-btn"])) {
    require_once __DIR__ . '/Model/Member.php';
    $member = new Member();
    $loginResult = $member->loginMember();
}
?>
<HTML>
<head>
        <link rel="stylesheet" type="text/css" href="css/register.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
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



		

</head>
<BODY>
	<div class="phppot-container">
		<div class="sign-up-container">
			<div class="login-signup">
				<a href="user-registration.php">Sign up</a>
			</div>
			<div class="signup-align">
				<form name="login" action="" method="post"
					onsubmit="return loginValidation()">
					<div class="signup-heading">Login</div>
				<?php if(!empty($loginResult)){?>
				<div class="error-msg"><?php echo $loginResult;?></div>
				<?php }?>
				<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Username<span class="required error" id="username-info"></span>
							</div>
							<input class="input-box-330" type="text" name="username"
								id="username">
						</div>
					</div>
					<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Password<span class="required error" id="login-password-info"></span>
							</div>
							<input class="input-box-330" type="password"
								name="login-password" id="login-password">
						</div>
					</div>
					<div class="row">
						<input class="btn" type="submit" name="login-btn"
							id="login-btn" value="Login">
					</div>
				</form>
			</div>
		</div>
	</div>

	<script>
function loginValidation() {
	var valid = true;
	$("#username").removeClass("error-field");
	$("#password").removeClass("error-field");

	var UserName = $("#username").val();
	var Password = $('#login-password').val();

	$("#username-info").html("").hide();

	if (UserName.trim() == "") {
		$("#username-info").html("required.").css("color", "#ee0000").show();
		$("#username").addClass("error-field");
		valid = false;
	}
	if (Password.trim() == "") {
		$("#login-password-info").html("required.").css("color", "#ee0000").show();
		$("#login-password").addClass("error-field");
		valid = false;
	}
	if (valid == false) {
		$('.error-field').first().focus();
		valid = false;
	}
	return valid;
}
</script>


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
</BODY>
</HTML>
