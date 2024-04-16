<?php
include("config.php");

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message']) && isset($_POST['uploadBy']) && isset($_POST['title'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $uploadBy = $_POST['uploadBy'];
    $title = $_POST['title'];

    // Insert query with five placeholders, including title and upload_by
    $insertQuery = "INSERT INTO `reviews` (`r_name`, `r_email`, `r_message`, `r_uploadby`, `r_blogtitle`) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($config, $insertQuery);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "sssss", $name, $email, $message, $uploadBy, $title); // Updated "sssss" to match five placeholders

        if (mysqli_stmt_execute($stmt)) {
            $response = array("message" => "Your Application Has Been Submitted");
        } else {
            $response = array("message" => "Error inserting contact information");
        }

        mysqli_stmt_close($stmt);
    } else {
        $response = array("message" => "Error preparing statement");
    }

    echo json_encode($response);
} else {
    $response = array("message" => "Invalid request");
    echo json_encode($response);
}
