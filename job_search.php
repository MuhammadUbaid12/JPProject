<?php
include("admin/config.php");

if (isset($_POST['location'])) {
    $searchLocation = $_POST['location'];

    // Fetch jobs based on the search location
    $sql = "SELECT * FROM job_table WHERE Jlocation LIKE '%$searchLocation%'";
    $result = $config->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            // Output the filtered job listings
            ?>
            <ul class="job-listings mb-5">
                <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
                    <a href="job.php?J_id=<?php echo $row['Jid'] ?>"></a>
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
            <?php
        }
    } else {
        // Output a message if no jobs are found
        echo "<p>No jobs found for the given location.</p>";
    }
}
?>