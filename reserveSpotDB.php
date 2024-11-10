<?php
	require 'Config.php';
?>

<?php
	if(isset($_POST["reserve"])){
		$vType = $_POST["field1"];
		$date = $_POST['resdate'];
		$lPNum = $_POST["field2"];
		$inTime = $_POST["field3"];
		$sNote = $_POST["field4"];
		
		//insert items to Data base
		$sql="INSERT INTO reservation(res_ID, vType, li_Num, inDate, in_Time, sNote)
		VALUES ('', '$vType', '$lPNum', '$date', '$inTime', '$sNote')";
		
		if(mysqli_query($conn, $sql)){
			echo"<script>alert ('Record Inserted Successfully!!');</script>";
		}
		else{
			echo "<script>alert ('Error in Insertion!!')</script>";
		}

		$sql2 = "SELECT res_ID
			FROM reservation
			ORDER BY res_ID DESC
			LIMIT 1";
		$result = $conn->query($sql2);

		if ($result) {
			$row = $result->fetch_assoc();
			$reservationID = $row['res_ID'];

			if ($reservationID !== null) {
				echo "<script>alert('Your Reservation ID is $reservationID');</script>";
			} else {
				echo "No records found.";
			}
		} else {
			echo "Error executing the query: " . $conn->error;
		}
		
		//close the connection
		mysqli_close($conn);
	}
	echo '<script>window.location.href = "reservespotpage.php";</script>';
?>

<?php
	require 'Config.php';
?>

<?php
	if(isset($_POST["updating"])){
		$resID = $_POST["field5"];
		$time = $_POST["field6"];
		$dateset = $_POST["changedate"];

        $sql="UPDATE reservation
        SET in_Time='$time', inDate='$dateset'
        WHERE res_ID=$resID";

		if(mysqli_query($conn, $sql)){
			echo"<script>alert ('Updated Reservation Successfully!!');</script>";
		}
		else{
			echo "<script>alert('Error in Insertion: " . mysqli_error($conn) . "');</script>";
		}


		//close the connection
		mysqli_close($conn);
	}
	echo '<script>window.location.href = "reservespotpage.php";</script>';
?>

<?php
	if(isset($_POST["remove"])){
		$ID = $_POST["field7"];

        $sql="DELETE FROM reservation
        WHERE res_ID=$ID";
		
		if (mysqli_query($conn, $sql)) {
            echo "<script type='text/javascript'>alert('Removed Reservation Successfully!!');</script>";
        } 
		else {
            echo "<script type='text/javascript'>alert('Error in Removing!!');</script>";
        }

		//close the connection
		mysqli_close($conn);
	}
	echo '<script>window.location.href = "reservespotpage.php";</script>';
?>