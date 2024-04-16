<?php
session_start();
include('header.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./dist/style2.css">
</head>

<body>
    <?php
    // include("ems/connection.php");
    include("admin/config.php");

    if (isset($_GET['N_id'])) {
        $N_id = $_GET['N_id'];

        $sql = "SELECT * FROM `news` WHERE `N_id` = $N_id";
        $result = mysqli_query($config, $sql);

        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);

            $frontline = $row['N_frontline'];
            $para = $row['N_para'];
            $image = $row['N_image'];
            $date = $row['N_date'];
            // $writtebby = $row['writtenby'];
    ?>
            <div class="sharp" style="background-image: url('admin/upload_images/<?php echo $image; ?>');">
                <div class="main-one">
                    <h1 class="evo">
                        <?php echo $frontline; ?>
                    </h1>
                </div>
            </div>
            <div class="row blogspot" style="padding-top:5px; margin:50px;">

                    <div class="order-lg-2 title">
                        <div class="blog-post col">
                            <p>
                                <?php echo $para;  ?>
                            </p>
                        </div>
                    </div>

                </div>
            </div>

            <!-- <p class="col" style="margin:10px 0px 0px 0px;padding:0;color:#282535;font-size:18px;font-weight:bold; margin:20px; margin-left:70px; margin-top:50px; margin-left:20px !important;">Upload by: <?php echo $writtebby; ?></p> -->

            <p class="col" style="margin:8px 0px 0px 0px;padding:0px 0px 30px 0px;color:#282535;font-size:18px;font-weight:bold; margin: 20px; margin-left: 70px; margin-left:20px !important;">Upload date: <?php echo $date; ?></p>

    <?php
        } else {
            echo "<div class='container'>";
            echo "<p class='text-center'>Blog post not found.</p>";
            echo "</div>";
        }
    } else {
        echo "<div class='container'>";
        echo "<p class='text-center'>Invalid request.</p>";
        echo "</div>";
    }
    ?>


  
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

</body>

</html>

<?php
include('footer.php');
?>






