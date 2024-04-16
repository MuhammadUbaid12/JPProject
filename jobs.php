<?php
session_start();
include('header.php');
?>

<!-- Add this input field in your HTML -->
<div class="input-group mt-5 container">
    <input type="text" id="locationSearch" class="form-control" placeholder="Search by Location">
</div>

<section class="site-section">
    <div class="container">

        <?php
        include("admin/config.php");

        // Pagination Settings
        $jobsPerPage = 3; // Number of jobs per page
        $current_page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
        $offset = ($current_page - 1) * $jobsPerPage;

        // Fetch jobs for the current page
        $sql = "SELECT * FROM job_table ORDER BY Jid DESC LIMIT $offset, $jobsPerPage";
        $result = $config->query($sql);

        // Open the 'ul' tag outside the loop
        echo '<ul class="job-listings mb-5">';

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                // Display job information
                ?>
                <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
                    <a href="job-single.html"></a>
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
                <?php
            }

            // Pagination Links
            $total_jobs_sql = "SELECT COUNT(*) as total_jobs FROM job_table";
            $total_jobs_result = $config->query($total_jobs_sql);
            $total_jobs = $total_jobs_result->fetch_assoc()['total_jobs'];
            $total_pages = ceil($total_jobs / $jobsPerPage);

            ?>
            <div class="row pagination-wrap">
                <div class="col-md-6 text-center text-md-left mb-4 mb-md-0">
                    <span>Showing
                        <?php echo $offset + 1; ?>-
                        <?php echo min($offset + $jobsPerPage, $total_jobs); ?> Of
                        <?php echo $total_jobs; ?> Jobs
                    </span>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="custom-pagination ml-auto">
                        <?php if ($current_page > 1): ?>
                            <a href="?page=<?php echo $current_page - 1; ?>" class="prev">Prev</a>
                        <?php endif; ?>

                        <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                            <a href="?page=<?php echo $i; ?>" class="<?php echo ($current_page == $i) ? 'active' : ''; ?>">
                                <?php echo $i; ?>
                            </a>
                        <?php endfor; ?>

                        <?php if ($current_page < $total_pages): ?>
                            <a href="?page=<?php echo $current_page + 1; ?>" class="next">Next</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php
        }

        // Close the 'ul' tag outside the loop
        echo '</ul>';
        ?>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
$(document).ready(function() {
    function fetchJobs(searchLocation) {
        // Send an Ajax request to fetch filtered jobs based on the location
        $.ajax({
            url: 'job_search.php', // Create a new PHP file (job_search.php) for handling Ajax requests
            type: 'POST',
            data: {
                location: searchLocation
            },
            success: function(data) {
                // Replace the existing job listings with the filtered ones
                $('.job-listings').html(data);
            }
        });
    }

    // Initial load
    fetchJobs('');

    // Listen for input changes in the search field
    $('#locationSearch').on('input', function() {
        // Get the value of the search input
        var searchLocation = $(this).val();

        // Fetch jobs based on the search location
        fetchJobs(searchLocation);
    });

    // Handle clearing the search bar
    $('#locationSearch').on('blur', function() {
        // Get the value of the search input
        var searchLocation = $(this).val();

        // If the search bar is cleared, fetch all jobs
        if (searchLocation === '') {
            fetchJobs('');
        }
    });
});
</script>

<?php
include('footer.php');
?>
