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

    if (isset($_GET['b_id'])) {
        $b_id = $_GET['b_id'];

        $sql = "SELECT * FROM `blog` WHERE `id` = $b_id";
        $result = mysqli_query($config, $sql);

        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);

            $title = $row['title'];
            $frontline = $row['frontline'];
            $titleimage = $row['titleimage'];
            $para1 = $row['para1'];
            $image1 = $row['image1'];
            $para2 = $row['para2'];
            $image2 = $row['image2'];
            $date = $row['date'];
            $writtebby = $row['writtenby'];
    ?>
            <div class="sharp" style="background-image: url('admin/<?php echo $titleimage; ?>');">
                <div class="main-one">
                    <h1 class="evo">
                        <?php echo $title; ?>
                    </h1>
                </div>
            </div>
            <div class="row blogspot" style="padding-top:35px; margin:50px;">
                <div>
                    <div style="padding:0px 0px 0px 0px;float:right; margin-left:10px" class="col-lg-6 order-lg-1 image1">
                        <div class="blog-image">
                            <img style="width:1000px;" class="col para1-image" src="admin/<?php echo $image1; ?>" alt="Card image cap">
                        </div>
                    </div>

                    <div class="order-lg-2 title">
                        <div class="blog-post col">
                            <p>
                                <?php echo '<span class="frontline">' . $title . '&nbsp;</span>' . $para1; ?>
                            </p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row blogspot" style="margin-top:50px;padding-bottom:40px; margin:50px;">
                <div>
                    <div style="padding:0px 0px 0px 0px;float:right; margin-left:10px" class="col-lg-6 order-lg-1 image2">
                        <div class="blog-image">
                            <img style="width:1000px;" class="col para1-image" src="admin/<?php echo $image2; ?>" alt="Card image cap">
                        </div>
                    </div>
                    <div class="order-lg-2 title">
                        <div class="blog-post col">
                            <p>
                                <?php echo '<span class="frontline">' . $title . '&nbsp;</span>' . $para2; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="last col" style="font-style:italic; color:#443e60;margin:0;">
                <h2 style="font-size:35px;margin-top:0;text-align:center;line-height: 45px; font-weight:bold; margin-bottom:20px" class="frontline">
                    <?php echo $frontline; ?>
                </h2>

            </div>
            <p class="col" style="margin:10px 0px 0px 0px;padding:0;color:#282535;font-size:18px;font-weight:bold; margin:20px; margin-left:70px; margin-top:50px; margin-left:20px !important;">Upload by: <?php echo $writtebby; ?></p>

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

<h1 class='text-center'>BLOG REVIEWS</h1>

<div class="container col-lg-6" style="border-radius:20px;background-color:#282535;margin-bottom:70px;padding-bottom:20px" >
    <div class="row" style="margin:0;padding:0;">
            <div class="">
                <div class="form-group">
                    <label for="exampleInputName">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Message</label>
                    <textarea style="height:150px;" class="form-control textarea" id="message" placeholder="Message"></textarea>
                </div>
                <div class="form-group ">
                    <input type="submit" onclick="review()" value="Send Review" class="btn-review">
                    <div class="submitting"></div>
                </div>
            </div>
        </div>
    </div>


    <script>
        function review() {
            var name = $('#name').val();
            var email = $('#email').val();
            var message = $('#message').val();
            var uploadBy = '<?php echo $writtebby; ?>';
            var title = '<?php echo $title; ?>';

            if (name.trim() === '' || email.trim() === '' || message.trim() === '') {
                alert('Please fill out all fields.');
                return;
            }

            var emailPattern = /^[a-zA-Z0-9._-]+@gmail\.com$/;
            if (!emailPattern.test(email)) {
                alert('Please enter a valid Email Address.');
                return;
            }

            $.ajax({
                type: 'post',
                data: {
                    name: name,
                    email: email,
                    message: message,
                    uploadBy: uploadBy,
                    title: title,
                },
                url: "admin/reviewLogic.php",
                success: function(data) {
                    var response = JSON.parse(data);
                    if (response.message === "Your Application Has Been Submitted") {
                        alert(response.message);
                        // Clear the input fields
                        $('#name').val('');
                        $('#email').val('');
                        $('#message').val('');
                    } else {
                        alert(response.message);
                    }
                }
            });
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

</body>

</html>

<?php
include('footer.php');
?>