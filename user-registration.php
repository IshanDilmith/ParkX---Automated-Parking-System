<?php
use Phppot\Member;
if (! empty($_POST["signup-btn"])) {
    require_once './Model/Member.php';
    $member = new Member();
    $registrationResponse = $member->registerMember();
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
				<a href="index.php">Login</a>
			</div>
			<div class="">
				<form name="sign-up" action="" method="post"
					onsubmit="return signupValidation()">
					<div class="signup-heading">Registration</div>
				<?php
    if (! empty($registrationResponse["status"])) {
        ?>
                    <?php
        if ($registrationResponse["status"] == "error") {
            ?>
				    <div class="server-response error-msg"><?php echo $registrationResponse["message"]; ?></div>
                    <?php
        } else if ($registrationResponse["status"] == "success") {
            ?>
                    <div class="server-response success-msg"><?php echo $registrationResponse["message"]; ?></div>
                    <?php
        }
        ?>
				<?php
    }
    ?>
				<div class="error-msg" id="error-msg"></div>
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
								Email<span class="required error" id="email-info"></span>
							</div>
							<input class="input-box-330" type="email" name="email" id="email">
						</div>
					</div>
					<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Password<span class="required error" id="signup-password-info"></span>
							</div>
							<input class="input-box-330" type="password"
								name="signup-password" id="signup-password">
						</div>
					</div>
					<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Confirm Password<span class="required error"
									id="confirm-password-info"></span>
							</div>
							<input class="input-box-330" type="password"
								name="confirm-password" id="confirm-password">
						</div>
					</div>
					<div class="row">
						<input class="btn" type="submit" name="signup-btn"
							id="signup-btn" value="Sign up">
					</div>
				</form>
			</div>
		</div>
	</div>

	<script>
function signupValidation() {
	var valid = true;

	$("#username").removeClass("error-field");
	$("#email").removeClass("error-field");
	$("#password").removeClass("error-field");
	$("#confirm-password").removeClass("error-field");

	var UserName = $("#username").val();
	var email = $("#email").val();
	var Password = $('#signup-password').val();
    var ConfirmPassword = $('#confirm-password').val();
	var emailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;

	$("#username-info").html("").hide();
	$("#email-info").html("").hide();

	if (UserName.trim() == "") {
		$("#username-info").html("required.").css("color", "#ee0000").show();
		$("#username").addClass("error-field");
		valid = false;
	}
	if (email == "") {
		$("#email-info").html("required").css("color", "#ee0000").show();
		$("#email").addClass("error-field");
		valid = false;
	} else if (email.trim() == "") {
		$("#email-info").html("Invalid email address.").css("color", "#ee0000").show();
		$("#email").addClass("error-field");
		valid = false;
	} else if (!emailRegex.test(email)) {
		$("#email-info").html("Invalid email address.").css("color", "#ee0000")
				.show();
		$("#email").addClass("error-field");
		valid = false;
	}
	if (Password.trim() == "") {
		$("#signup-password-info").html("required.").css("color", "#ee0000").show();
		$("#signup-password").addClass("error-field");
		valid = false;
	}
	if (ConfirmPassword.trim() == "") {
		$("#confirm-password-info").html("required.").css("color", "#ee0000").show();
		$("#confirm-password").addClass("error-field");
		valid = false;
	}
	if(Password != ConfirmPassword){
        $("#error-msg").html("Both passwords must be same.").show();
        valid=false;
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
