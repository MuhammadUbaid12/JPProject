<?php
include("config.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $userId = $_POST['userId'];
    $status = $_POST['status'];

    $updateQuery = "UPDATE signup SET `status` = '$status' WHERE `Sid` = $userId";

    if (mysqli_query($config, $updateQuery)) {
        echo "Status updated successfully!";
    } else {
        echo "Error updating status: " . mysqli_error($config);
    }
} else {
    echo "Invalid request";
}
?>
