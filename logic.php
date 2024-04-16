<?php
session_start();
// modal form start
// Include your database configuration
include("admin/config.php");

// Get the name and email from the AJAX request
if (isset($_POST['NewsName']) && isset($_POST['NewsEmail'])) {
    $NewsName = $_POST['NewsName'];
    $NewsEmail = $_POST['NewsEmail'];

    // Use prepared statements to insert the name and email into the database
    $stmt = $config->prepare("INSERT INTO newsletter (name, email) VALUES (?, ?)");
    $stmt->bind_param("ss", $NewsName, $NewsEmail);

    if ($stmt->execute()) {
        echo "Subscription successful!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the prepared statement and the database connection
    $stmt->close();
    mysqli_close($config);
}

// modal form end 

// Get form data



// Start the session




if (isset($_POST['signbtn'])) {
    // Collect form data
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $phone = isset($_POST['phoneNumber']) ? $_POST['phoneNumber'] : '';
    $address = isset($_POST['address']) ? $_POST['address'] : '';
    $type = isset($_POST['type']) ? $_POST['type'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    // Basic form validation
    if (empty($name) || empty($email) || empty($phone) || empty($address) || empty($type) || empty($password)) {
        echo "Please fill in all the fields.";
        exit();
    }

    // Email validation
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) || !preg_match('/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/', $email)) {
        echo '<script>alert("Invalid email format.");</script>';
        exit();
    }

    // Insert data into the appropriate table using prepared statements
    $defaultStatus = 'pending';

    if ($type == 'job_post') {
        $query = "INSERT INTO signup (name, email, phoneNumber, address, password, status, type) VALUES (?, ?, ?, ?, ?, ?, ?)";
    } elseif ($type == 'job_seeker') {
        $query = "INSERT INTO job_seeker_signup (name, email, phoneNumber, address, password, status, type) VALUES (?, ?, ?, ?, ?, ?, ?)";
    } else {
        echo "Unknown user type!";
        exit();
    }
    

    $stmt = mysqli_prepare($config, $query);

    if ($stmt) {
        // Bind parameters to the statement
        mysqli_stmt_bind_param($stmt, "sssssss", $name, $email, $phone, $address, $password, $defaultStatus, $type);


        // Execute the statement
        if (mysqli_stmt_execute($stmt)) {
            // Retrieve the user's id from the database
            $userId = mysqli_insert_id($config);

            // Store user details in session
            $_SESSION['Sid'] = $userId;
            $_SESSION['name'] = $name;
            $_SESSION['email'] = $email;
            $_SESSION['phoneNumber'] = $phone;
            $_SESSION['address'] = $address;
            $_SESSION['type'] = $type;
            
            // Check the user type and redirect accordingly
            if ($type == 'job_post') {
                header("Location: job_post.php");
                exit();
            } elseif ($type == 'job_seeker') {
                header("Location: jobs.php");
                exit();
            }
        } else {
            echo "Error: " . mysqli_error($config);
        }

        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        echo "Error: " . mysqli_error($config);
    }

    // Close the database connection
    // mysqli_close($config);
}






// Assuming $_SESSION['Sid'] contains the user ID
$userId = isset($_SESSION['Sid']) ? $_SESSION['Sid'] : null;
$userEmail = isset($_SESSION['email']) ? $_SESSION['email'] : null;

if (isset($_POST['jobbtn'])) {
    // Retrieve job details
    $jobTitle = isset($_POST['JjobTitle']) ? $_POST['JjobTitle'] : '';
    $location = isset($_POST['Jlocation']) ? $_POST['Jlocation'] : '';
    $jobType = isset($_POST['JjobType']) ? $_POST['JjobType'] : '';
    $jobDescription = isset($_POST['JjobDescription']) ? $_POST['JjobDescription'] : '';

    // Retrieve company details
    $companyName = isset($_POST['JcompanyName']) ? $_POST['JcompanyName'] : '';
    $tagline = isset($_POST['Jtagline']) ? $_POST['Jtagline'] : null;
    $companyDescription = isset($_POST['JcompanyDescription']) ? $_POST['JcompanyDescription'] : null;
    $website = isset($_POST['Jwebsite']) ? $_POST['Jwebsite'] : null;
    $facebookUsername = isset($_POST['JfacebookUsername']) ? $_POST['JfacebookUsername'] : null;
    $twitterUsername = isset($_POST['JtwitterUsername']) ? $_POST['JtwitterUsername'] : null;
    $linkedinUsername = isset($_POST['JlinkedinUsername']) ? $_POST['JlinkedinUsername'] : null;

    // File handling
    $targetDir = "admin/upload_images/";
    $jobImage = null;

    if (isset($_FILES["jobImage"]) && $_FILES["jobImage"]["error"] == 0) {
        $jobImage = $targetDir . basename($_FILES["jobImage"]["name"]);
        // Upload the job image
        if (move_uploaded_file($_FILES["jobImage"]["tmp_name"], $jobImage)) {
            // File uploaded successfully
        } else {
            echo '<script>alert("Job image upload failed");</script>';
            exit();
        }
    }

    $jobLogo = null;

    if (isset($_FILES["joblogo"]) && $_FILES["joblogo"]["error"] == 0) {
        $jobLogo = $targetDir . basename($_FILES["joblogo"]["name"]);
        // Upload the job logo
        if (move_uploaded_file($_FILES["joblogo"]["tmp_name"], $jobLogo)) {
            // File uploaded successfully
        } else {
            echo '<script>alert("Job logo upload failed");</script>';
            exit();
        }
    }

    // Basic form validation
    if (empty($jobTitle) || empty($location) || empty($jobType) || empty($jobDescription) || empty($companyName)) {
        echo '<script>alert("Please fill in all the required fields.");</script>';
        exit();
    }

    // Insert data into the database
    $sql = "INSERT INTO job_table (Sid, email, JjobTitle, Jlocation, JjobType, JjobDescription, JcompanyName, Jtagline, JcompanyDescription, Jwebsite, JfacebookUsername, JtwitterUsername, JlinkedinUsername, jobImage, Jlogo) VALUES ('$userId', '$userEmail', '$jobTitle', '$location', '$jobType', '$jobDescription', '$companyName', '$tagline', '$companyDescription', '$website', '$facebookUsername', '$twitterUsername', '$linkedinUsername', '$jobImage', '$jobLogo')";

    if ($config->query($sql) === TRUE) {
        echo '<script>alert("Job inserted successfully.");</script>';

        echo "<script> window.location.href='job_post.php';</script>";

        exit();
    } else {
        echo "Database insertion failed";
    }

    // Close the database connection
}


// Check if the form is submitted
if (isset($_POST['applybtn'])) {
    
    // Assuming $_SESSION['Sid'] contains the user ID
    $userId = isset($_SESSION['Sid']) ? $_SESSION['Sid'] : null;

    // Retrieve form data
    $name = $_POST['aname'];
    $email = $_POST['aemail'];
    $phoneNumber = $_POST['aphoneNumber'];
    $address = $_POST['aaddress'];
    
    // Email validation
   if (!filter_var($email, FILTER_VALIDATE_EMAIL) || !preg_match('/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/', $email)) {
        echo '<script>alert("Invalid email format.");</script>';
        exit();
    }

    $target_dir = "admin/upload_images/";
    $target_file = $target_dir . basename($_FILES["afile"]["name"]);
    
    $cv = $_FILES['afile']['tmp_name'];

    $allowedFileType = ['pdf'];
    $fileExtension = strtolower(pathinfo($_FILES['afile']['name'], PATHINFO_EXTENSION));

    if (!in_array($fileExtension, $allowedFileType)) {
        echo '<script>alert("Only PDF files are allowed for CV upload.");</script>';
        exit();
    }

    $cvContent = file_get_contents($cv);
    // Escape special characters to prevent SQL injection
    $cvContent = addslashes($cvContent);
    
    $message = $_POST['amessage'];
    
    if (move_uploaded_file($cv, $target_file)) {
        $jobId = $_POST['jobId']; 
        // User is logged in, apply with user ID
        $sql = "INSERT INTO apply (Sid, aname, aemail, aphone, aaddress, acv, amessage) 
                VALUES ('$jobId', '$name', '$email', '$phoneNumber', '$address', '$target_file', '$message')";
    } else {
        // User is not logged in, apply without user ID
        $jobId = $_POST['jobId']; // Add a hidden input field in your form to store the job ID
        $sql = "INSERT INTO apply (Sid, aname, aemail, aphone, aaddress, acv, amessage) 
                VALUES ('$jobId', '$name', '$email', '$phoneNumber', '$address', '$target_file', '$message')";
    }

    // Execute the query
        if ($config->query($sql) === TRUE) {
        echo '<script>alert("Apply successfully ");</script>';

        echo "<script> window.location.href='jobs.php';</script>";

        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $config->error;
    }

    // Close the connection
    // $config->close();
}


if (isset($_GET['id'])) {
    $a_id = mysqli_real_escape_string($config, $_GET['id']);

    $deleteQuery = "DELETE FROM apply WHERE aid='$a_id'";

    if (mysqli_query($config, $deleteQuery)) {
        // Successful deletion
        header("Location: job_post.php");
        exit(); // Ensure that no further code is executed after redirect
    } else {
        // Handle deletion error
        echo "Error deleting record: " . mysqli_error($config);
    }
}



if (isset($_POST['loginbtn'])) {
    // Include your database connection file
    include("admin/config.php");

    // Retrieve user input
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate admin credentials
    $adminQuery = "SELECT * FROM admin_details WHERE admin_email=? AND admin_pass=?";
    $adminStmt = mysqli_prepare($config, $adminQuery);
    mysqli_stmt_bind_param($adminStmt, "ss", $email, $password);
    mysqli_stmt_execute($adminStmt);
    $adminResult = mysqli_stmt_get_result($adminStmt);

    if ($adminResult) {
        if (mysqli_num_rows($adminResult) > 0) {
            // Admin is authenticated
            $admin = mysqli_fetch_assoc($adminResult);

            // Store admin details in session if needed
            $_SESSION['admin_id'] = $admin['admin_id'];
            $_SESSION['admin_email'] = $admin['admin_email'];

            // Redirect to admin dashboard or page
            header("Location: admin/index.php");
            exit();
        }
    }

    // If not an admin, check for regular user credentials in 'signup' table
    $userQuery = "SELECT * FROM signup WHERE email=? AND password=?";
    $userStmt = mysqli_prepare($config, $userQuery);
    mysqli_stmt_bind_param($userStmt, "ss", $email, $password);
    mysqli_stmt_execute($userStmt);
    $userResult = mysqli_stmt_get_result($userStmt);

    if ($userResult) {
        if (mysqli_num_rows($userResult) > 0) {
            // Regular user is authenticated
            $user = mysqli_fetch_assoc($userResult);

            // Store user details in session
            $_SESSION['Sid'] = $user['Sid'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['phoneNumber'] = $user['phoneNumber'];
            $_SESSION['address'] = $user['address'];
            $_SESSION['type'] = $user['type'];

            // Redirect based on user type
            if ($user['type'] == 'job_post') {
                header("Location: job_post.php");
                exit();
            } elseif ($user['type'] == 'job_seeker') {
                header("Location: jobs.php");
                exit();
            } else {
                // Handle other types or add a default redirect
                echo "Unknown user type!";
            }
        }
    }

    // If not in 'signup' table, check for job_seeker credentials in 'job_seeker_signup' table
    $jobSeekerQuery = "SELECT * FROM job_seeker_signup WHERE email=? AND password=?";
    $jobSeekerStmt = mysqli_prepare($config, $jobSeekerQuery);
    mysqli_stmt_bind_param($jobSeekerStmt, "ss", $email, $password);
    mysqli_stmt_execute($jobSeekerStmt);
    $jobSeekerResult = mysqli_stmt_get_result($jobSeekerStmt);

    if ($jobSeekerResult) {
        if (mysqli_num_rows($jobSeekerResult) > 0) {
            // Job seeker is authenticated
            $jobSeeker = mysqli_fetch_assoc($jobSeekerResult);

            // Store job seeker details in session if needed
            $_SESSION['Sid'] = $jobSeeker['id'];
            $_SESSION['name'] = $jobSeeker['name'];

            // Redirect to job seeker dashboard or page
            header("Location: jobs.php");
            exit();
        }
    }

    // If none of the above, invalid credentials
    echo '<script>alert("Invalid username and password");window.location.href="login.php"</script>';

    // Close the database connection
    mysqli_close($config);
}


?>