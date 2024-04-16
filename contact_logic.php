<?php
include("admin/config.php");
$response = array();

// Check if POST variables are set
if (isset($_POST['name'], $_POST['email'], $_POST['message'])) {
    // Escape and assign values
    $name = mysqli_real_escape_string($config, $_POST['name']);
    $email = mysqli_real_escape_string($config, $_POST['email']);
    $message = mysqli_real_escape_string($config, $_POST['message']);

    // Check if values are not empty
    if (!empty($name) && !empty($email) && !empty($message)) {
        // Use prepared statements
        $stmt = mysqli_prepare($config, "INSERT INTO contact (name, email, MESSAGE_TEXT) VALUES (?, ?, ?)");

        mysqli_stmt_bind_param($stmt, 'sss', $name, $email, $message);

        if (mysqli_stmt_execute($stmt)) {
            $response['status'] = 'success';
        } else {
            $response['status'] = 'error';
            $response['error'] = mysqli_error($config);
        }

        mysqli_stmt_close($stmt);
    } else {
        $response['status'] = 'error';
        $response['error'] = 'All fields are required.';
    }
} else {
    $response['status'] = 'error';
    $response['error'] = 'Incomplete data received.';
}

// mysqli_close($config);

// Return the response as JSON
header('Content-Type: application/json');
echo json_encode($response);

?>