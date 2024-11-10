<?php
require_once('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["feedbackId"])) {
        $feedbackId = (int)$_POST["feedbackId"];

        // Use DELETE statement to delete the feedback
        $sqlDeleteFeedback = "DELETE FROM feedbacks WHERE id = $feedbackId";

        if ($conn->query($sqlDeleteFeedback) === true) {
            // Feedback deleted successfully
            echo "Feedback deleted successfully.";
        } else {
            echo "Error deleting feedback: " . $conn->error;
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
