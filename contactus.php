<?php
require 'Config.php'; // Include your database configuration

if (isset($_POST["submitdetails"])) {
    // getting data from the html form
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // inserting data into database table
    $sql = "INSERT INTO contactusmsg (msgID, firstName, lastName, email, phoneNumber, topic, msg) VALUES ('', '$first_name', '$last_name', '$email', '$phone_number', '$subject', '$message')";

    if (mysqli_query($conn, $sql)) { // verifying Data inserted in to table successfully of not
        echo "Data inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }


    // reading message id from database and assing it to result variable
    $sql2 = "SELECT msgID
			FROM contactusmsg
			ORDER BY msgID DESC
			LIMIT 1";
		$result = $conn->query($sql2);

		if ($result) { //cheking resualt varible have some data or not
			$row = $result->fetch_assoc();
			$messageID = $row['msgID'];

			if ($messageID !== null) { //check whether message id avaible or not
				echo "<script>alert('Your Message ID is $messageID keep it with you this will be use full if you need to edit or delete message later');</script>";
			} else {
				echo "No records found.";
			}
		} else {
			echo "Error executing the query: " . $conn->error;
		}
}
echo '<script>window.location.href = "contactus.html";</script>'; // redirecting to contact us page
?>





