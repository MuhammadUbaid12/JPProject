<?php
session_start();
include('header.php');
?>

<div>
    <h1 class="heading text-center mb-4" style='margin-top:80px;'>Signup</h1>
</div>

<div class="container mt-4 mb-4">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="box">
                <form class="mb-5" action="logic.php" method="post">
                    <!-- Form fields go here -->
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="name" class="col-form-label">Name</label>
                            <input type="text" class="form-control" name="name" id="name" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="email" class="col-form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="email" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="phone" class="col-form-label">Phone Number</label>
                            <input type="number" class="form-control" name="phoneNumber" id="phone" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="address" class="col-form-label">address</label>
                            <input type="text" class="form-control" name="address" id="address" required>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-md-12 form-group">
                            <label for="type" class="col-form-label">Select Type</label>
                            <select class="form-control" name="type" id="type">
                                <option value="job_post">Job Post</option>
                                <option value="job_seeker">Job Seeker</option>
                            </select>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-md-12 form-group">
                            <label for="password" class="col-form-label">password</label>
                            <input type="password" class="form-control" name="password" id="password" required>

                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-12">
                            <a href="login.php">Already have an account?</a>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-12">
                            <input name="signbtn" type="submit" value="submit"
                                class="btn btn-block btn-primary rounded-0 py-2 px-4">
                            <span class="submitting"></span>
                        </div>
                    </div>
                </form>
                <div id="form-message-warning mt-4"></div>
                <div id="form-message-success">
                    Your message was sent, thank you!
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <section class="site-section">
    <div class="container">
        <?php
        include("admin/config.php");

       
        $jobsPerPage = 3; 
        $current_page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
        $offset = ($current_page - 1) * $jobsPerPage;

        
        $sql = "SELECT * FROM job_table ORDER BY Jid DESC LIMIT $offset, $jobsPerPage";
        $result = $config->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                
                ?>
                <ul class="job-listings mb-5">
                   
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
                </ul>







                <?php
            }

           
            $total_jobs_sql = "SELECT COUNT(*) as total_jobs FROM job_table";
            $total_jobs_result = $config->query($total_jobs_sql);
            $total_jobs = $total_jobs_result->fetch_assoc()['total_jobs'];
            $total_pages = ceil($total_jobs / $jobsPerPage);
            ?>
            <div class="row pagination-wrap">
    <div class="col-md-6 text-center text-md-left mb-4 mb-md-0">
        <span>Showing <?php echo $offset + 1; ?>-<?php echo min($offset + $jobsPerPage, $total_jobs); ?> Of <?php echo $total_jobs; ?> Jobs</span>
    </div>
    <div class="col-md-6 text-center text-md-right">
        <div class="custom-pagination ml-auto">
            <?php if ($current_page > 1) : ?>
                <a href="?page=<?php echo $current_page - 1; ?>" class="prev">Prev</a>
            <?php endif; ?>

            <?php for ($i = 1; $i <= $total_pages; $i++) : ?>
                <a href="?page=<?php echo $i; ?>" class="<?php echo ($current_page == $i) ? 'active' : ''; ?>"><?php echo $i; ?></a>
            <?php endfor; ?>

            <?php if ($current_page < $total_pages) : ?>
                <a href="?page=<?php echo $current_page + 1; ?>" class="next">Next</a>
            <?php endif; ?>
        </div>
    </div>
</div>

            <?php
        }
        ?>
    </div>
</section> -->


<?php
include('footer.php');
?>