<?php
	require 'Config.php';
?>

<?php
    if(isset($_POST["retVehicle"])){
		$res_ID = $_POST["resID"];
        $out_Time = $_POST["out_Time"];

        //inserting values to database
        $sql="INSERT INTO retrieve(ret_ID, res_ID, out_Time)
        VALUES('', '$res_ID', '$out_Time')";
		
		if(mysqli_query($conn, $sql)){
			echo"<script>alert ('Retrieved Successfully!!');</script>";
            echo"<script>alert ('Thanks for choosing Us!!');</script>";
		}
		else{
			echo "<script>alert ('Error in Retrieving!! Enter valid ID');</script>";
		}
		
		//close the connection
		mysqli_close($conn);
	}
	echo '<script> window.location.href = "retrive.php";</script>';
?>
