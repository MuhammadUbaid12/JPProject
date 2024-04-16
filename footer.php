<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="images/JPG-removebg-preview.png" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!--====== nice select css ======-->
    <link rel="stylesheet" href="css/nice-select.css">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="css/slick.css">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="css/default.css">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>


    <!--====== BINDUZ FOOTER PART START ======-->

    <footer class="binduz-er-footer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="binduz-er-footer-widget-style-1">
                                <div class="binduz-er-footer-title">
                                    <h3 class="binduz-er-title">Categories</h3>
                                </div>
                                <div class="binduz-er-footer-menu-list">
                                    <ul>
                                        <li><a href="#">Architecture</a></li>
                                        <li><a href="#">New look 2015</a></li>
                                        <li><a href="#">Gadgets</a></li>
                                        <li><a href="#">Mobile and Phones</a></li>
                                        <li><a href="#">Recipes</a></li>
                                        <li><a href="#">Decorating</a></li>
                                    </ul>
                                    <ul>
                                        <li><a href="#">Interiors</a></li>
                                        <li><a href="#">Street fashion</a></li>
                                        <li><a href="#">Street fashion</a></li>
                                        <li><a href="#">Lifestyle</a></li>
                                        <li><a href="#">Lookback</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="binduz-er-footer-widget-style-1">
                                <div class="binduz-er-footer-title">
                                    <h3 class="binduz-er-title">Newsletter</h3>
                                </div>
                                <div class="binduz-er-footer-widget-form">
                                    <form action="#">
                                        <div class="binduz-er-input-box">
                                            <i class="fal fa-user"></i>
                                            <input type="text" placeholder="Enter your name">
                                        </div>
                                        <div class="binduz-er-input-box">
                                            <i class="fal fa-envelope"></i>
                                            <input type="email" placeholder="Enter email address">
                                        </div>
                                        <div class="binduz-er-input-box">
                                            <button type="button"><i class="fal fa-paper-plane"></i> Subscribe
                                                Now</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="binduz-er-footer-widget-style-3">
                                <div class="binduz-er-footer-title">
                                    <h3 class="binduz-er-title">Recent Feeds</h3>
                                </div>
                                <div class="binduz-er-footer-widget-feeds">
                                    <div class="binduz-er-sidebar-latest-post-box">
                                        <?php
                                    include("admin/config.php");
                                    $sql = "SELECT * FROM news ORDER BY N_id DESC LIMIT 2";
                                    $result = $config->query($sql);

                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                            $para1_preview = implode(' ', array_slice(str_word_count($row['N_para'], 1), 0, 7));
                                    ?>
                                        <div class="binduz-er-sidebar-latest-post-item">
                                            <div class="binduz-er-thumb" style="width:120px;background-image:cover;">
                                                <a href="trendingNews.php?N_id=<?php echo $row['N_id'] ?>"><img
                                                        style="height:100px;width:120px;"
                                                        src="./admin/upload_images/<?php echo $row['N_image'] ?>"
                                                        alt=""></a>
                                            </div>
                                            <div class="binduz-er-content">
                                                <span><i class="fal fa-calendar-alt"></i> 24th February 2020</span>
                                                <h4 class="binduz-er-title"> <a
                                                        href="trendingNews.php?N_id=<?php echo $row['N_id'] ?>"><?php echo $row['N_frontline']; ?></a>
                                                </h4>
                                            </div>
                                        </div>
                                        <?php
                                        }
                                    }
                                    ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="binduz-er-footer-widget-info">
                        <div class="binduz-er-logo">
                            <a href="#"><img src="images/JPG-removebg-preview.png" style="height:200px;" alt=""></a>
                        </div>
                        <div class="binduz-er-text">
                            <p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Quis ipsum suspend isse ultrices gravida.
                            </p>
                        </div>
                        <!-- <div class="binduz-er-social">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div> -->
                    </div>
                </div>
            </div>

        </div>
        <div class="binduz-er-back-to-top">
            <p>BACK TO TOP <i class="fal fa-long-arrow-right"></i></p>
        </div>
    </footer>
    <div class="binduz-er-footer-copyright-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="binduz-er-copyright-text">
                        <p>Copyright By @<a href="https://evodyna.com/" target="_blank"><span>Evodynamics</span></a> -
                            2022 - 2024</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="binduz-er-copyright-menu float-lg-end float-none">
                        <ul>
                            <li><a href="#">Privacy &amp; Policy</a></li>
                            <li><a href="#">Claim A Report</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== BINDUZ FOOTER PART ENDS ======-->

    <!--====== BINDUZ BACK TO TOP PART START ======-->

    <div class="binduz-er-back-to-top">
        <p>BACK TO TOP <i class="fal fa-long-arrow-right"></i></p>
    </div>

    <!--====== BINDUZ BACK TO TOP PART ENDS ======-->

    <!--====== BINDUZ HEADER PART ENDS ======-->
    <!--====== jquery js ======-->
    <script src="javascript/modernizr-3.6.0.min.js"></script>
    <script src="javascript/jquery-1.12.4.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="javascript/bootstrap.min.js"></script>
    <script src="javascript/popper.min.js"></script>

    <!--====== Slick js ======-->
    <script src="javascript/slick.min.js"></script>

    <!--====== nice select js ======-->
    <script src="javascript/jquery.nice-select.min.js"></script>

    <!--====== Isotope js ======-->
    <script src="javascript/isotope.pkgd.min.js"></script>

    <!--====== Images Loaded js ======-->
    <script src="javascript/imagesloaded.pkgd.min.js"></script>

    <!--====== Magnific Popup js ======-->
    <script src="javascript/jquery.magnific-popup.min.js"></script>

    <!--====== Main js ======-->
    <script src="javascript/main.js"></script>
</body>

</html>