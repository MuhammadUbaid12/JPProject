<?php
session_start();
include('header.php');
?>

<?php
include("admin/config.php");

if (!isset($_SESSION['Sid'])) {
    echo "<script>window.location.href='signup.php'</script>;";
}
// Assuming you have a database connection established, if not, make sure to establish a connection before running the query.

// Assuming $_SESSION['Sid'] contains the user ID
$userId = isset($_SESSION['Sid']) ? $_SESSION['Sid'] : null;

if ($userId) {
    // Modify the SQL query to select the status for the current user
    $statusQuery = "SELECT `status` FROM signup WHERE Sid = $userId";
    $statusResult = mysqli_query($config, $statusQuery);

    if (!$statusResult) {
        die('Error in the query: ' . mysqli_error($config)); // Handle the error appropriately
    }

    $statusRow = mysqli_fetch_assoc($statusResult);

    // Check if the user has an approved status
    if ($statusRow && $statusRow['status'] == 'approved') {
        echo '<button style="margin-left:20px" type="button" class="btn btn-primary mt-4 mb-3" data-toggle="modal" data-target="#postJobModal">Job Post</button>';
    } else {
        echo '<h2 style="padding:50px 50px 10px 20px;">Wait for approval.</h2>';
    }
} else {
    echo 'User not logged in. Please log in to view your jobs.';
}

// Close the database connection if needed
mysqli_close($config);
?>




<!-- Modal Structure -->
<div class="modal fade" id="postJobModal" tabindex="-1" role="dialog" aria-labelledby="postJobModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="postJobModalLabel">Post Job</h5>
                <button type="button" style="padding-left:15px;padding-right:15px;" class="close btn btn-danger btn-sm"
                    data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="logic.php" method="post" enctype="multipart/form-data">
                    <!-- Job Title -->
                    <div class="form-group">
                        <label for="jobTitle">Job Title</label>
                        <input type="text" class="form-control" id="JjobTitle" name="JjobTitle" required>
                    </div>
                    <!-- Location -->
                    <div class="form-group">
                        <label for="location">Location</label>
                        <input type="text" class="form-control" id="Jlocation" name="Jlocation" required>
                    </div>

                    <!-- Job Type -->
                    <div class="form-group">
                        <label for="jobType">Job Type</label>
                        <select class="form-control" id="JjobType" name="JjobType" required>
                            <option value="Full Time">Full Time</option>
                            <option value="Part Time">Part Time</option>
                            <!-- Add more options as needed -->
                        </select>
                    </div>
                    <!-- Job Description -->
                    <div class="form-group">
                        <label for="jobDescription">Job Description</label>
                        <textarea class="form-control" id="JjobDescription" name="JjobDescription" rows="4"
                            required></textarea>
                    </div>
                    <!-- Tagline -->
                    <div class="form-group">
                        <label for="tagline"> Job Tagline </label>
                        <input type="text" class="form-control" id="Jtagline" name="Jtagline">
                    </div>
                    <!-- Company Details -->
                    <h5 class="mt-4">Company Details</h5>
                    <!-- Company Name -->
                    <div class="form-group">
                        <label for="companyName">Company Name</label>
                        <input type="text" class="form-control" id="JcompanyName" name="JcompanyName" required>
                    </div>

                    <!-- Company Description -->
                    <div class="form-group">
                        <label for="companyDescription">Company Description </label>
                        <textarea class="form-control" id="JcompanyDescription" name="JcompanyDescription"
                            rows="4"></textarea>
                    </div>
                    <!-- Website -->
                    <div class="form-group">
                        <label for="website"> Company Website </label>
                        <input type="url" class="form-control" id="Jwebsite" name="Jwebsite">
                    </div>
                    <!-- Social Media Links -->
                    <div class="form-group">
                        <label>Facebook Username </label>
                        <input type="url" class="form-control" name="JfacebookUsername">
                    </div>
                    <div class="form-group">
                        <label>Twitter Username </label>
                        <input type="url" class="form-control" name="JtwitterUsername">
                    </div>
                    <div class="form-group">
                        <label>Linkedin Username </label>
                        <input type="url" class="form-control" name="JlinkedinUsername">
                    </div>
                    <!-- Image Upload -->
                    <br>
                    <div class="form-group">
                        <label for="jobImage">Thumbnail Image</label>
                        <input type="file" class="form-control-file" id="jobImage" name="jobImage" accept="image/*">
                    </div><br>
                    <div class="form-group">
                        <label for="jobImage">Company Logo</label>
                        <input type="file" class="form-control-file" id="joblogo" name="joblogo" accept="image/*">
                    </div>
                    <!-- Submit Button -->
                    <div class="modal-footer ">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button name="jobbtn" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <?php
    include("admin/config.php");

    // Assuming $_SESSION['Sid'] contains the user ID
    $userId = isset($_SESSION['Sid']) ? $_SESSION['Sid'] : null;

    if ($userId) {
        // Modify the SQL query to select jobs for the current user
        $sql = "SELECT * FROM job_table WHERE Sid = $userId ORDER BY Jid DESC";
        $result = $config->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                ?>
    <div>
        <ul class="job-listings mb-5">
            <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">

                <div class="job-listing-logo">
                    <img style="height:100px;" src="<?php echo $row['Jlogo'] ?>" alt="rj" class="img-fluid">
                </div>
                <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
                    <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
                        <h2><a href="job.php?J_id=<?php echo $row['Jid'] ?>">
                                <?php echo $row['JjobTitle']; ?>
                            </a> </h2>
                        <strong style='position:relative;top:15px;'>
                            <?php echo $row['JcompanyName']; ?>
                        </strong>
                    </div>
                    <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
                        <span class="">
                            <?php echo $row['Jlocation']; ?>
                        </span>
                    </div>
                    <div class="job-listing-meta">
                        <span class=" badge bg-danger">
                            <?php echo $row['JjobType']; ?>
                        </span>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <?php
            }
        } else {
            echo "";
        }
    } else {
        echo "User not logged in. Please log in to view your jobs.";
    }
    ?>
</div>

<?php
// job_post.php

include("admin/config.php");

// Assuming $_SESSION['Sid'] contains the user ID
$userId = isset($_SESSION['Sid']) ? $_SESSION['Sid'] : null;

// Fetch applied records for the current user
$sql = "SELECT * FROM apply WHERE Sid = '$userId'";
$result = $config->query($sql);

// Display the results in a table
if ($result->num_rows > 0) {
    ?>
<style>
.table-container {
    width: 100%;
    overflow-x: auto;
}

.icon-container {
    display: flex;
    justify-content: center;
    align-items: center;
}

.icon-container a {
    margin: 10px;
    font-size: 20px;
}



/* Add a slider at the bottom for horizontal scrolling */
.table-container::-webkit-scrollbar {
    height: 12px;
}

.table-container::-webkit-scrollbar-thumb {
    background-color: #4CAF50;
    border-radius: 10px;
}

.table-container::-webkit-scrollbar-track {
    background-color: #f1f1f1;
    border-radius: 10px;
}
</style>

<div class="table-container" style="margin-bottom:80px;">
    <table border="1" style="border-collapse: collapse;" class="table table-bordered table-striped container">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Address</th>
                <th>CV</th>
                <th>Message</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while ($row = $result->fetch_assoc()) {
                    ?>
            <tr>
                <td>
                    <?php echo $row['aname']; ?>
                </td>
                <td>
                    <?php echo $row['aemail']; ?>
                </td>
                <td>
                    <?php echo $row['aphone']; ?>
                </td>
                <td>
                    <?php echo $row['aaddress']; ?>
                </td>
                <td>
                    <?php echo '<a href="admin/download.php?aid=' . $row['aid'] . '">View CV</a>'; ?>
                </td>

                <td>
                    <?php echo $row['amessage']; ?>
                </td>
                <td>
                    <div class="icon-container">
                        <a style='color:red;' href='logic.php?id=<?php echo $row['aid']; ?>'><i
                                class='fas fa-trash'></i></a>
                    </div>
                </td>
            </tr>
            <?php
                }
                ?>
        </tbody>
    </table>
</div>
<?php
} else {
    echo "<h2 style='padding:0px 50px 50px 20px;'>No records found for the current job apply.</h2>";
}

// Close the connection
$config->close();
?>





<!-- ... (your existing HTML code) ... -->

<!--====== jquery js ======-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!--====== Bootstrap js ======-->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<!-- ... (your existing script tags) ... -->


<script data-cfasync="false" src="js/email-decode.min.js"></script>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/main.js"></script>
<script defer=""
    src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317"
    data-cf-beacon="{"
    rayid":"83f193e6bff90ead","b":1,"version":"2023.10.0","token":"cd0b4b3a733644fc843ef0b185f98241"}"=""
    crossorigin="anonymous"></script>



<?php
include('footer.php');
?>