<?php

// include("config.php");


//////////blog///////////

include("config.php");



if (isset($_POST["submit"])) {
    // Sanitize form data
    $bTitle = mysqli_real_escape_string($config, $_POST['b_title']);
    $b_frontline = mysqli_real_escape_string($config, $_POST['b_frontline']);
    $b_para1 = mysqli_real_escape_string($config, $_POST['b_para1']);
    $b_para2 = mysqli_real_escape_string($config, $_POST['b_para2']);
    $b_para3 = mysqli_real_escape_string($config, $_POST['b_para3']);
    $b_para4 = mysqli_real_escape_string($config, $_POST['b_para4']);
    $b_para5 = mysqli_real_escape_string($config, $_POST['b_para5']);
    $b_para6 = mysqli_real_escape_string($config, $_POST['b_para6']);
    $b_para7 = mysqli_real_escape_string($config, $_POST['b_para7']);
    $b_para8 = mysqli_real_escape_string($config, $_POST['b_para8']);
    $b_date = mysqli_real_escape_string($config, $_POST['b_date']);
    $b_written = mysqli_real_escape_string($config, $_POST['b_Writtenby']);

    // Handle image upload for title image
    $uploadDirectoryTitle = 'upload_images/';
    $b_titleimage = $_FILES['b_title_image'];
    $uploadedImageTitle = handleImageUpload($b_titleimage, 'title');

    // Handle image uploads for dynamic fields
    $uploadedImage1 = handleImageUpload($_FILES['b_image1'], 1);
    $uploadedImage2 = handleImageUpload($_FILES['b_image2'], 2);
    $uploadedImage3 = handleImageUpload($_FILES['b_image3'], 3);
    $uploadedImage4 = handleImageUpload($_FILES['b_image4'], 4);
    $uploadedImage5 = handleImageUpload($_FILES['b_image5'], 5);
    $uploadedImage6 = handleImageUpload($_FILES['b_image6'], 6);
    $uploadedImage7 = handleImageUpload($_FILES['b_image7'], 7);
    $uploadedImage8 = handleImageUpload($_FILES['b_image8'], 8);

    // Insert data into the database
    $insertQuery = "INSERT INTO blog (title, frontline, titleimage, para1, image1, para2, image2, para3, image3, para4, image4, para5, image5, para6, image6, para7, image7, para8, image8, date, writtenby) 
                   VALUES ('$bTitle', '$b_frontline', '$uploadedImageTitle', '$b_para1', '$uploadedImage1', '$b_para2', '$uploadedImage2', '$b_para3', '$uploadedImage3', '$b_para4', '$uploadedImage4', '$b_para5', '$uploadedImage5', '$b_para6', '$uploadedImage6', '$b_para7', '$uploadedImage7', '$b_para8', '$uploadedImage8', '$b_date', '$b_written')";

    if (mysqli_query($config, $insertQuery)) {
        echo "<script>alert('Blog inserted successfully.');</script>";
    } else {
        echo "<script>alert('Error inserting blog data.');</script>";
    }

    // Close the database connection
    mysqli_close($config);
}

function handleImageUpload($file, $index) {
    global $uploadDirectoryDynamic;

    $uploadDirectoryDynamic = 'upload_images/';

    $imageName = $file['name'];
    $tempImage = $file['tmp_name'];

    if (!empty($imageName)) {
        $uploadedImage = $uploadDirectoryDynamic . $index . '_' . $imageName;
        move_uploaded_file($tempImage, $uploadedImage);
        return $uploadedImage;
    }

    return null;
}



///////////////////////////


include("config.php");

$response = array();

if (isset($_POST["id"])) {
    $blogId = $_POST['id'];
    $title = $_POST['edit_title'];
    $frontline = $_POST['edit_frontline'];
    $para1 = $_POST['edit_para1'];
    $para2 = $_POST['edit_para2'];
    $date = $_POST['edit_date'];
    $writtenby = $_POST['edit_Writtenby'];

    // Initialize the query with common fields
    $updateQuery = "UPDATE blog SET title='$title', frontline='$frontline', para1='$para1', para2='$para2', date='$date', writtenby='$writtenby'";

    // Check if a new Title image file has been uploaded
    if (isset($_FILES['edit_title_image']) && $_FILES['edit_title_image']['error'] == 0) {
        $targetDir = "upload_images/";
        $targetFileTitleImage = $targetDir . basename($_FILES["edit_title_image"]["name"]);

        if (move_uploaded_file($_FILES["edit_title_image"]["tmp_name"], $targetFileTitleImage)) {
            $updateQuery .= ", titleimage='$targetFileTitleImage'";
        } else {
            $response['status'] = 'error';
            $response['message'] = 'Error uploading title image';
            echo json_encode($response);
            exit;
        }
    }

    // Check if a new image1 file has been uploaded
    if (isset($_FILES['edit_image1']) && $_FILES['edit_image1']['error'] == 0) {
        $targetDir = "upload_images/";
        $targetFileImage1 = $targetDir . basename($_FILES["edit_image1"]["name"]);

        if (move_uploaded_file($_FILES["edit_image1"]["tmp_name"], $targetFileImage1)) {
            $updateQuery .= ", image1='$targetFileImage1'";
        } else {
            $response['status'] = 'error';
            $response['message'] = 'Error uploading image1';
            echo json_encode($response);
            exit;
        }
    }

    // Check if a new image2 file has been uploaded
    if (isset($_FILES['edit_image2']) && $_FILES['edit_image2']['error'] == 0) {
        $targetDir = "upload_images/";
        $targetFileImage2 = $targetDir . basename($_FILES["edit_image2"]["name"]);

        if (move_uploaded_file($_FILES["edit_image2"]["tmp_name"], $targetFileImage2)) {
            $updateQuery .= ", image2='$targetFileImage2'";
        } else {
            $response['status'] = 'error';
            $response['message'] = 'Error uploading image2';
            echo json_encode($response);
            exit;
        }
    }

    // Complete the update Query
    $updateQuery .= " WHERE id='$blogId'";

    if (mysqli_query($config, $updateQuery)) {
        $response['status'] = 'success';
        $response['message'] = 'Blog updated successfully';

        // Fetch the updated product data
        $result = mysqli_query($config, "SELECT * FROM blog WHERE id='$blogId'");
        $product = mysqli_fetch_assoc($result);
        $response['blog'] = $product;
    } else {
        $response['status'] = 'error';
        $response['message'] = 'Error updating blog: ' . mysqli_error($config);
    }

    echo json_encode($response);
}



// include("config.php");

if (isset($_GET['id'])) {
    $blogId = $_GET['id'];

    $deleteQuery = "DELETE FROM blog WHERE id='$blogId'";

    if (mysqli_query($config, $deleteQuery)) {
        // Successful deletion
        header("Location: section.php?section=blog");
    } else {
        // Handle deletion error
        echo "Error deleting product: " . mysqli_error($config);
    }
}


////////// blog //////////



///// video blog //////


if (isset($_POST["VideoSubmit"])) {

    $vTitle = $_POST['v_title'];
    $v_frontline = $_POST['v_frontline'];
    $v_date = $_POST['v_date'];
    $v_upload = $_POST['v_upload'];

    $uploadDirectory = 'upload_images/';

    // Process video file
    $v_Video = $_FILES['v_video'];
    $videoName = $v_Video['name'];
    $tempVideo = $v_Video['tmp_name'];
    $videoExtension = strtolower(pathinfo($videoName, PATHINFO_EXTENSION));
    $allowedVideoExtensions = array('mp4', 'avi', 'mov'); // Add more video extensions if needed

    if (!in_array($videoExtension, $allowedVideoExtensions)) {
        echo "<script>alert('Wrong video file extension. Only MP4, AVI, and MOV files are allowed.'); window.location.href='index.php';</script>";
        exit();
    }

    $uploadedVideo = $uploadDirectory . $videoName;
    move_uploaded_file($tempVideo, $uploadedVideo);

    // Process thumbnail image
    $thumbnailImage = $_FILES['v_thumbnail'];
    $thumbnailName = $thumbnailImage['name'];
    $tempThumbnail = $thumbnailImage['tmp_name'];
    $thumbnailImageExtension = strtolower(pathinfo($thumbnailName, PATHINFO_EXTENSION));
    $allowedExtensions = array('jpg', 'jpeg', 'png');

    if (!in_array($thumbnailImageExtension, $allowedExtensions)) {
        echo "<script>alert('Wrong thumbnail file extension. Only JPG, JPEG, and PNG files are allowed.'); window.location.href='index.php';</script>";
        exit();
    }

    $uploadedThumbnail = $uploadDirectory . $thumbnailName;
    move_uploaded_file($tempThumbnail, $uploadedThumbnail);

    $insertQuery = "INSERT INTO video (v_title, v_thumbnail, v_video, v_frontline, v_date, v_upload) VALUES ('$vTitle', '$uploadedThumbnail', '$uploadedVideo', '$v_frontline', '$v_date', '$v_upload')";

    if (mysqli_query($config, $insertQuery)) {
        echo "<script>alert('Video inserted successfully.'); window.location.href='section.php?section=video';</script>";
    } else {
        echo "<script>alert('Error inserting video.'); window.location.href='section.php?section=video';</script>";
    }
}


$response = array();


if (isset($_POST["EditVideoId"])) {
    $videoId = $_POST['EditVideoId'];
    $vTitle = $_POST['EditVideoTitle'];
    $vFrontline = $_POST['EditVideoFrontline'];
    $vDate = $_POST['EditVideoDate'];
    $vUpload = $_POST['EditVideoUploadBy'];

    // Check if a new thumbnail image has been uploaded
    if (isset($_FILES['EditVideoThumbnail']) && $_FILES['EditVideoThumbnail']['error'] == 0) {
        $targetDir = "upload_images/";
        $thumbnailName = basename($_FILES["EditVideoThumbnail"]["name"]);
        $targetThumbnail = $targetDir . $thumbnailName;

        if (move_uploaded_file($_FILES["EditVideoThumbnail"]["tmp_name"], $targetThumbnail)) {
            // Use prepared statements to prevent SQL injection
            $updateQueryThumbnail = "UPDATE video SET v_thumbnail=? WHERE v_id=?";
            $stmtThumbnail = mysqli_prepare($config, $updateQueryThumbnail);
            mysqli_stmt_bind_param($stmtThumbnail, "si", $targetThumbnail, $videoId);

            if (mysqli_stmt_execute($stmtThumbnail)) {
                // Thumbnail update successful
            } else {
                $response['status'] = 'error';
                $response['message'] = 'Error updating thumbnail: ' . mysqli_error($config);
                echo json_encode($response);
                exit;
            }
            mysqli_stmt_close($stmtThumbnail);
        } else {
            $response['status'] = 'error';
            $response['message'] = 'Error uploading thumbnail image';
            echo json_encode($response);
            exit;
        }
    }

    // Check if a new video file has been uploaded
    if (isset($_FILES['EidtVideo']) && $_FILES['EidtVideo']['error'] == 0) {
        $targetDir = "upload_images/";
        $videoName = basename($_FILES["EidtVideo"]["name"]);
        $targetVideo = $targetDir . $videoName;

        if (move_uploaded_file($_FILES["EidtVideo"]["tmp_name"], $targetVideo)) {
            // Use prepared statements to prevent SQL injection
            $updateQueryVideo = "UPDATE video SET v_video=? WHERE v_id=?";
            $stmtVideo = mysqli_prepare($config, $updateQueryVideo);
            mysqli_stmt_bind_param($stmtVideo, "si", $targetVideo, $videoId);

            if (mysqli_stmt_execute($stmtVideo)) {
                // Video update successful
            } else {
                $response['status'] = 'error';
                $response['message'] = 'Error updating video: ' . mysqli_error($config);
                echo json_encode($response);
                exit;
            }
            mysqli_stmt_close($stmtVideo);
        } else {
            $response['status'] = 'error';
            $response['message'] = 'Error uploading video file';
            echo json_encode($response);
            exit;
        }
    }

    // Use prepared statements to prevent SQL injection
    $updateQueryInfo = "UPDATE video SET v_title=?, v_frontline=?, v_date=?, v_upload=? WHERE v_id=?";
    $stmtInfo = mysqli_prepare($config, $updateQueryInfo);
    mysqli_stmt_bind_param($stmtInfo, "ssssi", $vTitle, $vFrontline, $vDate, $vUpload, $videoId);

    if (mysqli_stmt_execute($stmtInfo)) {
        $response['status'] = 'success';
        $response['message'] = 'Video updated successfully';

        // Fetch the updated video data
        $result = mysqli_query($config, "SELECT * FROM video WHERE v_id='$videoId'");
        $video = mysqli_fetch_assoc($result);
        $response['video'] = $video;
    } else {
        $response['status'] = 'error';
        $response['message'] = 'Error updating video information: ' . mysqli_error($config);
    }

    mysqli_stmt_close($stmtInfo);
    echo json_encode($response);
    exit;
}

if (isset($_GET['v_id'])) {
    $vv_id = $_GET['v_id'];

    $deleteQuery = "DELETE FROM video WHERE v_id='$vv_id'";

    if (mysqli_query($config, $deleteQuery)) {
        // Successful deletion
        header("Location: section.php?section=video");
    } else {
        // Handle deletion error
        echo "Error deleting product: " . mysqli_error($config);
    }
}



if ($config) {
    if (isset($_POST['NewsSubmit'])) {
        $N_frontline = mysqli_real_escape_string($config, $_POST['N_frontline']);
        $N_date = mysqli_real_escape_string($config, $_POST['N_date']);
        $N_image = $_FILES['N_image']['name'];
        $N_para = mysqli_real_escape_string($config, $_POST['N_para']);

        // Upload image to a server directory
        $target_dir = "upload_images/";
        $target_file = $target_dir . basename($_FILES["N_image"]["name"]);

        // Ensure the folder has the correct permissions
        if (!file_exists($target_dir)) {
            mkdir($target_dir, 0777, true);
        }

        // Check for file upload errors
        if ($_FILES["N_image"]["error"] !== UPLOAD_ERR_OK) {
            echo "File upload failed with error code: " . $_FILES["N_image"]["error"];
        } else {
            // Verify if the file is an image and has a supported extension
            $allowed_extensions = array("jpg", "jpeg", "png");
            $file_extension = strtolower(pathinfo($_FILES["N_image"]["name"], PATHINFO_EXTENSION));

            if (in_array($file_extension, $allowed_extensions)) {
                // Move the file to the target directory
                if (move_uploaded_file($_FILES["N_image"]["tmp_name"], $target_file)) {
                    // Insert data into the database using prepared statements
                    $sql = "INSERT INTO news (N_frontline, N_date, N_image, N_para) VALUES (?, ?, ?, ?)";
                    $stmt = mysqli_prepare($config, $sql);

                    if ($stmt) {
                        mysqli_stmt_bind_param($stmt, "ssss", $N_frontline, $N_date, $N_image, $N_para);

                        if (mysqli_stmt_execute($stmt)) {
                            header("Location:section.php?section=news");

                            // echo "<script>alert('Data inserted successfully');</script>";
                            // Redirect to the admin page
                            exit();
                        } else {
                            echo "Error executing statement: " . mysqli_stmt_error($stmt);
                        }

                        mysqli_stmt_close($stmt);
                    } else {
                        echo "Error preparing statement: " . mysqli_error($config);
                    }
                } else {
                    echo "Failed to move uploaded file.";
                }
            } else {
                echo "Invalid file format. Only JPG, JPEG, and PNG files are allowed.";
            }
        }
    }

//     mysqli_close($config);
// } else {
//     die("Connection failed: " . mysqli_connect_error());
}


include("config.php");

if (isset($_GET['N_id'])) {
    $newsId = $_GET['N_id'];

    $deleteQuery = "DELETE FROM news WHERE N_id='$newsId'";

    if (mysqli_query($config, $deleteQuery)) {
        // Successful deletion
        header("Location: section.php?section=news");
    } else {
        // Handle deletion error
        echo "Error deleting news: " . mysqli_error($config);
    }
}
///// video blog //////


// JOB/////

if (isset($_GET['Jid'])) {
    $JOBId = $_GET['Jid'];

    $deleteQuery = "DELETE FROM job_table WHERE Jid='$JOBId'";

    if (mysqli_query($config, $deleteQuery)) {
        // Successful deletion
        header("Location: section.php?section=JOBS");
    } else {
        // Handle deletion error
        echo "Error deleting product: " . mysqli_error($config);
    }
}
////JOB///

// promotion//
if (isset($_POST['PSubmit'])) {
    $frontline = $_POST['PFrontline'];
    $url = $_POST['PURL'];
    $color = $_POST['PColor'];

    // Insert data into the database
    $sql = "INSERT INTO promotion (PFrontline, PURL, PColor) VALUES ('$frontline', '$url', '$color')";

    if ($config->query($sql) === TRUE) {
        echo '<script>alert("Data inserted successfully");</script>';
        echo "<script> window.location.href='section.php?section=promotion';</script>";

    } else {
        echo "Error: " . $sql . "<br>" . $config->error;
    }

}

if (isset($_GET['PID'])) {
    $PID = $_GET['PID'];

    $deleteQuery = "DELETE FROM promotion WHERE PID='$PID'";

    if (mysqli_query($config, $deleteQuery)) {
        // Successful deletion
        header("Location: section.php?section=promotion");
    } else {
        // Handle deletion error
        echo "Error deleting product: " . mysqli_error($config);
    }
}
// promoton end 



if (isset($_POST['addsSubmit'])) {
    // Retrieve form data
    $frontline = $_POST['prfrontline'];
    $url = $_POST['prurl'];

    // Process image upload
    $targetDir = "upload_images/"; // Create a directory to store uploaded images
    $targetFile = $targetDir . basename($_FILES["primage"]["name"]);
    move_uploaded_file($_FILES["primage"]["tmp_name"], $targetFile);
     // Check connection
     if ($config->connect_error) {
        die("Connection failed: " . $config->connect_error);
    }

    // SQL query to insert data
    $sql = "INSERT INTO promo (prfrontline, prurl, primage) VALUES ('$frontline', '$url', '$targetFile')";

    if ($config->query($sql) === TRUE) {
        echo "<script>alert('Adds inserted successfully.'); window.location.href='section.php?section=addspromo';</script>";
    } else {
        echo "<script>alert('Error inserting Adds.'); window.location.href='section.php?section=addspromo';</script>";
    }

   
}

if (isset($_GET['prid'])) {
    $PID = $_GET['prid'];

    $deleteQuery = "DELETE FROM promo WHERE prid='$PID'";

    if (mysqli_query($config, $deleteQuery)) {
        // Successful deletion
        header("Location: section.php?section=promo");
    } else {
        // Handle deletion error
        echo "Error deleting product: " . mysqli_error($config);
    }
}
?>