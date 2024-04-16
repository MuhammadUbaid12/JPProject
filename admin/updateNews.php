<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $editNewsId = $_POST['edit_news_id'];
    $editNFrontline = $_POST['edit_N_frontline'];
    $editNDate = $_POST['edit_N_date'];
    $editNPara = $_POST['edit_N_para'];

    // Check if a new image is uploaded
    if (!empty($_FILES['edit_N_image']['name'])) {
        // Handle image upload
        $editNImage = $_FILES['edit_N_image']['name'];
        $uploadFolder = 'upload_images/';
        $uploadPath = $uploadFolder . $editNImage;
        move_uploaded_file($_FILES['edit_N_image']['tmp_name'], $uploadPath);

        // Update the news data in the database with the new image
        $updateQuery = "UPDATE news SET N_frontline='$editNFrontline', N_date='$editNDate', N_image='$editNImage', N_para='$editNPara' WHERE N_id='$editNewsId'";
    } else {
        // No new image selected, keep the existing image
        $updateQuery = "UPDATE news SET N_frontline='$editNFrontline', N_date='$editNDate', N_para='$editNPara' WHERE N_id='$editNewsId'";
    }

    $result = mysqli_query($config, $updateQuery);

    if ($result) {
        echo "<script>alert('News Update Successfully'); window.location.href = 'section.php?section=news';</script>";
    } else {
        $response = array('status' => 'error', 'message' => 'Error updating news');
        echo json_encode($response);
    }
}
?>