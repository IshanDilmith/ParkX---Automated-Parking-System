<?php
    require 'config.php'
?>

<?php

    if (isset($_POST["insert1"])) {
        $fName = $_POST["fName2"];
        $lName = $_POST["lName2"];
        $email = $_POST["email2"];
        $contact = $_POST["contact2"];
        $dob = $_POST["dob2"];
        $address = $_POST["address2"];
        $newPw = $_POST["newPw2"];

        $sql = "UPDATE user
        SET
            First_Name = '$fName',
            Last_Name = '$lName',
            Email = '$email',
            Contact_no = '$contact',
            Date_of_birth = '$dob',
            Address1 = '$address',
            New_password = '$newPw'
        WHERE Email = '$email'";

        if ($conn->query($sql) === TRUE) {
            // Check if any rows were affected
            if ($conn->affected_rows > 0) {
                echo "Success";
                header("Location: editprofile.php");
            } else {
                echo "<script>alert('Error: No matching email found in the database.');</script>";
            }
        } else {
            echo "Error: " . $conn->error;
        }

        $conn->close();
    }
?>


<?php

    if (isset($_POST["delete2"])) {

    $email = $_POST["Email3"];

    $sql = "DELETE FROM user
    WHERE Email = '$email'";

    if ($conn->query($sql)) {
        echo "Success";
        header("Location: editprofile.php");
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();

}
?>

<?php

	if(isset($_POST["resbtn"])){
		$upd = $_POST["resolve"];

        $sql="INSERT INTO issue(id, issues)
        values('','$upd')";
        

		if(mysqli_query($conn, $sql)){
			echo"<script>alert ('Success!!');</script>";
		}
		else{
			echo "<script>alert ('Error in Insertion!!');</script>";
		}

		//close the connection
		mysqli_close($conn);
	}
	echo '<script>window.location.href = "cusreview.html";</script>';

?>