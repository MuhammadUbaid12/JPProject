<?php
session_start();
include('header.php');
?>

<?php
include("admin/config.php");

// Check if the 'Jid' parameter is set in the URL
if (isset($_GET['J_id'])) {
    $jobId = $_GET['J_id'];

    // Use prepared statements to prevent SQL injection
    $stmt = $config->prepare("SELECT * FROM job_table WHERE Jid = $jobId");
    // $stmt->bind_param("i", $jobId);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Display job details
        ?>
<!-- HOME -->
<section class="section-hero overlay inner-page bg-image"
    style="background-image: url(<?php echo $row['jobImage'] ?>); background-size: cover;" id="home-section">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h1 class="text-white font-weight-bold">
                    <?php echo $row['JjobTitle'] ?>
                </h1>
                <div class="custom-breadcrumbs">
                    <a href="#">Home</a> <span class="mx-2 slash">/</span>
                    <a href="#">Job</a> <span class="mx-2 slash">/</span>
                    <span class="text-white"><strong>
                            <?php echo $row['JjobTitle'] ?>
                        </strong></span>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="site-section">
    <div class="container">

        <div class="row align-items-center mb-5">
            <div class="col-lg-8 mb-4 mb-lg-0">
                <div class="d-flex align-items-center">
                    <div class="border p-2 d-inline-block mr-3 rounded">
                        <img style="height:150px; width:200px;" src="<?php echo $row['Jlogo'] ?>" alt="rj"
                            class="img-fluid">

                    </div>
                    <div style='margin-left:20px;'>
                        <h2>
                            <?php echo $row['JcompanyName'] ?>
                        </h2>
                        <div>
                            <span class="m-2"><i class="fas fa-map-marker-alt"></i>
                                <?php echo $row['Jlocation']; ?>
                            </span>
                            <span class=""><i class="far fa-clock"></i></span><span class="text-danger">
                                <?php echo $row['JjobType']; ?>
                            </span></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <!-- <div class="row">

                        <div class="col-6">
                            <a href="#" class="btn btn-block btn-primary btn-md">Apply Now</a>
                        </div>
                    </div> -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="mb-5">
                    <figure class="mb-5">
                        <img style="object-fit: cover; height: 440px; width: 900px;"
                            src="<?php echo $row['jobImage'] ?>" alt="rj" class="img-fluid rounded">
                    </figure>

                    <h3 style="color: red; " class="h5 d-flex align-items-center text-red"><span class=""></span><b> JOB
                            DESCRIPTION </b></h3>
                    <div class="text-danger" style='font-size:17px;'>
                        <?php echo $row['Jtagline']; ?>

                    </div>
                    <p>
                        <?php echo $row['JjobDescription']; ?>

                    </p>

                </div>

                <div class="mb-5">


                    <h3 style="color: red; " class="h5 d-flex align-items-center text-red"><span class=""></span><b>
                            COMPANY DETAILS </b></h3>
                    <p>
                        <?php echo $row['JcompanyDescription']; ?>
                    </p>
                    <span>visit our website:<a href=" <?php echo $row['Jwebsite']; ?>">
                            <?php echo $row['Jwebsite']; ?></a></span>

                </div>
            </div>
            <div class="col-lg-4">
                <div class="bg-light p-3 border rounded mb-4">
                    <h3 style="color: red; " class="text-RED  mt-3 h5 pl-3 mb-3 ">JOB SUMMARY</h3>
                    <ul style="line-height: 35px; font-weight: 200;" class="list-unstyled pl-3 mb-0">
                        <li class="mb-2"><strong class="text-black">Published on:</strong> <?php echo $row['Jdate']; ?>
                        </li>
                        <li class="mb-2"><strong class="text-black">Employment Status:</strong>
                            <?php echo $row['JjobType']; ?>
                        </li>
                        <li class="mb-2"><strong class="text-black">Job Location:</strong>
                            <?php echo $row['Jlocation']; ?>
                        </li>
                        <!-- <li class="mb-2"><strong class="text-black">Application Deadline:</strong> April 28, 2019
                                </li> -->
                    </ul>
                </div>

                <div class="bg-light p-3 border rounded">
                    <h3 class="text-danger  mt-3 h5 pl-3 mb-3 ">SHARE</h3>
                    <div class="px-2">
                        <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="fab fa-facebook"
                                style="margin-right: 10px;"></span></a>
                        <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="fab fa-twitter"
                                style="margin-right: 10px;"></span></a>
                        <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="fab fa-linkedin"
                                style="margin-right: 10px;"></span></a>
                        <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="fab fa-pinterest"></span></a>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <h2 class='text-center'>Apply Now </h2>
    <div class="container mt-4 mb-4">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="box border rounded p-4">
                    <form action="logic.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="jobId" value="<?php echo $row['Sid']; ?>">
                        <div class="form-group">
                            <label for="name" class="col-form-label">Name</label>
                            <input type="text" class="form-control" name="aname" id="name">
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-form-label">Email</label>
                            <input type="email" class="form-control" name="aemail" id="email">
                        </div>
                        <div class="form-group">
                            <label for="number" class="col-form-label">Phone Number</label>
                            <input type="number" class="form-control" name="aphoneNumber" id="phone">
                        </div>
                        <div class="form-group">
                            <label for="address" class="col-form-label">Address</label>
                            <input type="text" class="form-control" name="aaddress" id="address">
                        </div>
                        <div class="form-group">
                            <label for="file" class="col-form-label">cv</label>
                            <input type="file" class="form-control" name="afile" id="file">


                        </div>
                        <div class="form-group">
                            <label for="message" class="col-form-label">Message</label>
                            <textarea class="form-control" name="amessage" id="amessage" cols="30" rows="7"></textarea>
                        </div>
                        <div class="form-group mt-4">
                            <input name="applybtn" type="submit" value="Apply" class="btn btn-primary btn-block">
                            <span class="submitting"></span>
                        </div>
                    </form>
                    <div id="form-message-warning" class="mt-4"></div>
                    <div id="form-message-success" class="mt-4">
                        Your message was sent, thank you!
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
</div>

<?php
    }
}
?>

<!-- SCRIPTS -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/stickyfill.min.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>

<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/owl.carousel.min.js"></script>

<script src="js/bootstrap-select.min.js"></script>

<script src="js/custom.js"></script>



<?php
include('footer.php');
?>