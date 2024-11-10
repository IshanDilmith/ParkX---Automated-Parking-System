<?php
require_once('config.php');

    // Fetch feedbacks from the database
    $sqlSelectFeedbacks = "SELECT * FROM feedbacks ORDER BY added_date DESC";
    $feedbacks = $conn->query($sqlSelectFeedbacks);

    // Create the database if it doesn't exist
    $sqlCreateDB = "CREATE DATABASE IF NOT EXISTS parkingreservation";
    if ($conn->query($sqlCreateDB) === true) {
    } else {
        echo "Error creating database: " . $conn->error;
    }

    // Select the database
    //$conn->select_db($dbname);

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

    // Fetch feedbacks from the database
    $sqlSelectFeedbacks = "SELECT * FROM feedbacks ORDER BY added_date DESC";
    $feedbacks = $conn->query($sqlSelectFeedbacks);
?>