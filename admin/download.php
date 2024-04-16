<?php
include("config.php");

if (isset($_GET['aid'])) {
    $aid = $_GET['aid'];

    // Use prepared statement to prevent SQL injection
    $stmt = $config->prepare("SELECT acv FROM apply WHERE aid = ?");
    $stmt->bind_param("i", $aid);

    // Execute the prepared statement
    $stmt->execute();

    // Bind the result variable
    $stmt->bind_result($acv);

    // Fetch the result
    if ($stmt->fetch()) {
        // Adjust the file path to point to admin/upload_images directory
        $file_path = "upload_images/" . basename($acv);

        // Check if the file exists
        if (file_exists(__DIR__ . '/' . $file_path)) {
            // Set the appropriate content type and disposition for a PDF file
            header('Content-Type: application/pdf');
            header('Content-Disposition: inline; filename="' . basename($file_path) . '"');

            // Clear output buffer and flush
            ob_clean();
            flush();

            // Output the file content
            readfile(__DIR__ . '/' . $file_path);
            exit(); // Important: Stop further script execution after sending the file
        } else {
            echo 'File not found at path: ' . __DIR__ . '/' . $file_path;
        }
    } else {
        echo 'No data found for the given ID.';
    }

    // Close the statement
    $stmt->close();
} else {
    echo 'Invalid request. Please provide an application ID.';
}
?>