<?php
require_once('config.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["userId"]) && isset($_POST["vehicleId"]) && isset($_POST["feedback"])) {
        echo '<script>alert("Form submitted successfully!");</script>';

        $userId = $conn->real_escape_string($_POST["userId"]);
        $vehicleId = $conn->real_escape_string($_POST["vehicleId"]);
        $feedback = $conn->real_escape_string($_POST["feedback"]);

        // Create the database if it doesn't exist
    $sqlCreateDB = "CREATE DATABASE IF NOT EXISTS parkingreservation";
    if ($conn->query($sqlCreateDB) === true) {
    } else {
        echo "Error creating database: " . $conn->error;
    }

    // Select the database
    $conn->select_db($dbname);

    // Create the feedback table if it doesn't exist
    $sqlCreateTable = "CREATE TABLE IF NOT EXISTS feedbacks (
        id INT AUTO_INCREMENT PRIMARY KEY,
        userId TEXT,
        vehicleId TEXT,
        feedback TEXT,
        added_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";

    if ($conn->query($sqlCreateTable) === true) {
    } else { 
        echo "Error creating table: " . $conn->error;
    }

        // Use an INSERT INTO statement to add a new feedback record
        $sqlInsertFeedback = "INSERT INTO feedbacks (userId, vehicleId, feedback) VALUES ('$userId', '$vehicleId', '$feedback')";

        if ($conn->query($sqlInsertFeedback) === true) {
            // Feedback added successfully
            echo '<script>location.reload();</script>'; // Reload the page
        } else {
            echo "Error adding feedback: " . $conn->error;
        }
    } else {
        echo "Invalid request.";
    }
} else {
    echo "Invalid request method.";
}

// Close the database connection
$conn->close();
?>
