<?php
require 'Config.php'; // Include your database configuration

if (isset($_POST['editedmessage'])) {
    // Retrieve the user enterd msgID from the html form
    $msgID = $_POST['editedmessage'];

    
    $sql = "SELECT * FROM contactusmsg WHERE msgID = $msgID";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $messageData = mysqli_fetch_assoc($result);
    }
    else{
        echo "<script>alert('invalid ID');</script>";
        echo '<script>window.location.href = "contactus.html";</script>';
    }

   
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/contactusstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <title>Edit Message</title>
</head>

<body>
<div class="getleft">    <!--logo-->
    <div class="image">
        <img src="images\ParkXlogo.png" alt="ParkX logo" class="logo">
    </div>
</div>
<div class="container colornav topBotomBordersIn">    <!--navigation bar start-->
    <a href="index.html">Home</a>
    <a href="reservespotpage.php">Reserve a Parking Spot</a>
    <a href="retrive.php">Retrieve Vehicle</a>
    <a href="addFeedback.php">Feedback</a>
    <a href="aboutus.html">About Us</a>
    <a href="contactus.html">Contact Us</a>
</div>        

<!--form for edit existing message same as new message form diff is thie form is all ready filled with user enterd erly and also allow user to edit it and save changers-->
<div class="contact-form" id="newMessageForm" >
    <h2>Edit Message</h2>
    <form action="editmessage.php" method="post">
        <div class="form-group">
            <label for="first_name">First Name</label>
            <input type="text" id="first_name" name="first_name" value="<?php echo $messageData['firstName']; ?>" required>
        </div>
        <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="text" id="last_name" name="last_name" value="<?php echo $messageData['lastName']; ?>" required>
        </div>
       
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="<?php echo $messageData['email']; ?>" required>
        </div>
        <div class="form-group">
            <label for="phone_number">Phone Number</label>
            <input type="text" id="phone_number" name="phone_number" value="<?php echo $messageData['phoneNumber']; ?>">
        </div>
        <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" id="subject" name="subject" value="<?php echo $messageData['topic']; ?>" required>
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea id="message" name="message" required><?php echo $messageData['msg']; ?></textarea>
        </div>
        
        <div class="form-group">
            <button type="submit" name="save_changes">Save Changes</button>
            <button type="submit" name="delete">Delete</button>
        </div>
        
        <input type="hidden" name="msgID" value="<?php echo $msgID; ?>">
    </form>
</div>

    <footer>
    <div class="flex-container">    <!--container1-->
        <div class="ft-1">    <!--box1-->
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
    <div class="flex-container3">    <!--container3-->
        <div><hr class="footer-hr"></div>
    </div>
    <div class="flex-container2">    <!--container2-->
        <div><center>ParkX &copy 2023 All rights reserved.</center></div>
    </div>
</footer>
<!--footer section end-->    
</body>
</html>

<!--php for save changers func-->
<?php
if (isset($_POST['save_changes'])) {
   
    echo "hell" ;
    $msgID = $_POST['msgID'];
    $firstName = mysqli_real_escape_string($conn, $_POST['first_name']);
    $lastName = mysqli_real_escape_string($conn, $_POST['last_name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone_number']);
    $subject = mysqli_real_escape_string($conn, $_POST['subject']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    echo $message;
    // Update the database
    $updateSql = "UPDATE contactusmsg SET 
                 firstName = '$firstName',
                 lastName = '$lastName',
                 email = '$email',
                 phoneNumber = '$phone',
                 topic = '$subject',
                 msg = '$message'
                 WHERE msgID = $msgID";

    if (mysqli_query($conn, $updateSql)) {
        
        echo "<script>alert('updated');</script>";
        echo '<script>window.location.href = "contactus.html";</script>';
        
    } else {
    
        echo "Error: " . mysqli_error($conn);
    }

}

if (isset($_POST['delete'])) {
   
    $msgID = $_POST['msgID'];

    // Delete the message from the database
    $deleteSql = "DELETE FROM contactusmsg WHERE msgID = $msgID";

    if (mysqli_query($conn, $deleteSql)) {
        
        echo "<script>alert('deleted');</script>";
        echo '<script>window.location.href = "contactus.html";</script>';
    } else {
        
        echo "Error: " . mysqli_error($conn);
    }
}
?>