<?php
session_start();
include_once("header.php");
?>



<!-- rameez code -->

<?php
include("admin/config.php");
$sql = "SELECT * FROM news ORDER BY N_id DESC LIMIT 1"; // Fetch the most recently added news
$result = $config->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $para1_preview = implode(' ', array_slice(preg_split('/\s+/', $row['N_para']), 0, 10));

        ?>

<div class="hero-slide-deactive">
    <div class="binduz-er-hero-area d-flex align-items-center">
        <div class="binduz-er-bg-cover"
            style='background-image:url(./admin/upload_images/<?php echo $row['N_image'] ?>)'>
            <!-- <img   style="width:100%;height:690px;background-image:cover;  position: relative;"   src="./admin/upload_images/<?php echo $row['N_image'] ?>" alt=""> -->

        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-7">
                    <div class="binduz-er-hero-news-content">
                        <div class="binduz-er-hero-meta">
                            <div class="binduz-er-meta-category">
                                <a style="font-size:25px;"
                                    href="trendingNews.php?N_id=<?php echo $row['N_id'] ?>"><?php echo $row['N_frontline']; ?></a>
                            </div>
                            <div class="binduz-er-meta-date">
                            <a
                                    href="trendingNews.php?N_id=<?php echo $row['N_id'] ?>"><span><i class="fal fa-calendar-alt"></i> <?php echo $row['N_date']; ?></span></a>
                            </div>
                        </div>
                        <div class="binduz-er-hero-title">
                        <a style="font-size:25px;"
                                    href="trendingNews.php?N_id=<?php echo $row['N_id'] ?>"><span class="binduz-er-title" style='font-size:30px;'><?php echo $para1_preview; ?></span></a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="binduz-er-hero-weather d-flex justify-content-end">
                        <div class="binduz-er-weather-item">
                            <img src="images/icon-1.png" alt="">
                            <h5 class="binduz-er-title">Melbourne</h5>
                            <span>31°C / 25 - 32°C</span>
                        </div>
                        <div class="binduz-er-weather-item">
                            <img src="images/icon-2.png" alt="">
                            <h5 class="binduz-er-title">New York </h5>
                            <span>31°C / 25 - 32°C</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        }
    }
?>

</div>
</div>

<!-- <div class="modal fade" tabindex="-1" role="dialog" id="firstModal">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content border-top border-warning">
            <div class="modal-header">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <div id="checkIcon">
                    <img src="images/JPG-removebg-preview.png" height="200" alt="Post box 3d image">
                </div>
                <div class="mt-4 py-2">
                    <h4 class="h5">Don't Miss Any Updates</h4>
                    <p class="px-4 pb-0 mb-1 text-secondary">Don't worry, we will keep your information private.</p>
                </div>
                <div class="p-3">
                    <div class="mb-3">
                        <input type="text" placeholder="Enter Your Name" class="form-control rounded-0" id="nameInput">
                    </div>
                    <div class="mb-3">
                        <input type="email" placeholder="Enter Your Email Id" class="form-control rounded-0"
                            id="emailInput">
                    </div>
                    <div class="d-flex justify-content-evenly">
                        <div class="flex-grow-1 mx-1">
                            <button name='rameez' type="button" id="subscribeButton"
                                class="btn btn-warning text-white rounded-0 w-100">Subscribe</button>
                        </div>
                    </div>
                </div>
                <a type="button" class="text-secondary rounded-0 w-100" data-bs-dismiss="modal"><small>I don't want
                        any updates</small></a>
            </div>
        </div>
    </div>
</div> -->


<!--====== BINDUZ HERO PART ENDS ======-->

<!--====== BINDUZ TRENDING PART START ======-->

<section class="binduz-er-trending-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12">
                <div
                    class="binduz-er-trending-news-topbar d-block d-md-flex justify-content-between align-items-center">
                    <div class="binduz-er-trending-box">
                        <div class="binduz-er-title">
                            <h3 class="binduz-er-title">Latest News</h3>
                        </div>
                    </div>

                    <div class="binduz-er-news-tab-btn d-flex justify-content-md-end justify-content-start">
                        <!--  -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="binduz-er-trending-news-list">
                            <div class="tab-content mt-50" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-1" role="tabpanel"
                                    aria-labelledby="pills-1-tab">
                                    <div class="row">
                                        <style>
                                        @media (max-width: 577px) {
                                            .binduz-er-trending-news-item {
                                                display: inline-block;
                                                /* Adjust the height as needed */
                                            }
                                        }
                                        </style>
                                        <div class="col-lg-7">

                                            <?php
                                            include("admin/config.php");
                                            $sql = "SELECT * FROM news ORDER BY N_id DESC LIMIT 1 OFFSET 1";
                                            $result = $config->query($sql);

                                            if ($result->num_rows > 0) {
                                                while ($row = $result->fetch_assoc()) {
                                                    // $para1_preview = implode(' ', array_slice(str_word_count($row['N_para'], 1), 0, 7));
        $para1_preview = implode(' ', array_slice(preg_split('/\s+/', $row['N_para']), 0, 20));


                                                    ?>
                                            <div style="display:inline-block;" class="binduz-er-trending-box">
                                                <div class="binduz-er-trending-news-item">
                                                <a href="trendingNews.php?N_id=<?php echo $row['N_id'] ?>"><img src="./admin/upload_images/<?php echo $row['N_image'] ?>"
                                                        ></a>
                                                    <div class="binduz-er-trending-news-overlay">
                                                        <div class="binduz-er-trending-news-meta">
                                                            <div class="binduz-er-meta-categories">
                                                                <a
                                                                    href="trendingNews.php?N_id=<?php echo $row['N_id'] ?>"><?php echo $row['N_frontline']; ?></a>

                                                            </div>
                                                            <div class="binduz-er-meta-date">
                                                                <span><i class="fal fa-calendar-alt"></i>
                                                                    <?php echo $row['N_date']; ?></span>
                                                            </div>
                                                            <div class="binduz-er-trending-news-title">
                                                                <h3 class="binduz-er-title"><a
                                                                        href="trendingNews.php?N_id=<?php echo $row['N_id'] ?>"><?php echo $para1_preview; ?></a></h3>
                                                            </div>
                                                        </div>
                                                        <div class="binduz-er-news-share">
                                                            <a href="trendingNews.php?N_id=<?php echo $row['N_id'] ?>"><i class="fal fa-share"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </div>



                                        <div class="col-lg-5 col-md-6">
                                            <?php
                                            include("admin/config.php");
                                            $sql = "SELECT * FROM news ORDER BY N_id DESC LIMIT 2, 3";
                                            $result = $config->query($sql);

                                            if ($result->num_rows > 0) {
                                                while ($row = $result->fetch_assoc()) {
                                                    $para1_preview = implode(' ', array_slice(str_word_count($row['N_para'], 1), 0, 7));

                                                    ?>
                                            <div class="binduz-er-trending-news-list-item">

                                                <div class="binduz-er-trending-news-list-box mt-4">
                                                    <div class="binduz-er-thumb"
                                                        style="width:120px;background-image:cover;">
                                                        <img style="height:100px;"
                                                            src="./admin/upload_images/<?php echo $row['N_image'] ?>"
                                                            alt="">
                                                    </div>
                                                    <div class="binduz-er-content">
                                                        <div class="binduz-er-meta-item">
                                                            <div class="binduz-er-meta-categories">
                                                                <a
                                                                    href="trendingNews.php?N_id=<?php echo $row['N_id'] ?>"><?php echo $row['N_frontline']; ?></a>
                                                            </div>
                                                            <div class="binduz-er-meta-date">
                                                                <span><i class="fal fa-calendar-alt"></i>
                                                                    <?php echo $row['N_date']; ?></span>
                                                            </div>
                                                        </div>
                                                        <div class="binduz-er-trending-news-list-title">
                                                            <h4 class="binduz-er-title"><a
                                                                    href="#"><?php echo $para1_preview; ?></a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                                }
                                            }
                                            ?>
                                            <div>
                                                <a href="View_News_article.php" class="btn view-blogs"
                                                    style="color:black;margin-top:30px; display: flex; align-items:center; justify-content:center; position: relative; font-size: large;font-weight: 600; text-decoration: none;outline: none;background: none;border: none; box-shadow: 0px 0px 7px rgba(0,0,0,0.5);">View
                                                    More News</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab">
                                    <div class="row">
                                        <div class="col-lg-7 col-md-6">
                                            <div class="binduz-er-trending-box">
                                                <div class="binduz-er-trending-news-item">
                                                    <img src="images/trending-thumb.png" alt="">
                                                    <div class="binduz-er-trending-news-overlay">
                                                        <div class="binduz-er-trending-news-meta">
                                                            <div class="binduz-er-meta-categories">
                                                                <a href="#">Technology</a>
                                                            </div>
                                                            <div class="binduz-er-meta-date">
                                                                <span><i class="fal fa-calendar-alt"></i> 24th
                                                                    February 2020</span>
                                                            </div>
                                                            <div class="binduz-er-trending-news-title">
                                                                <h3 class="binduz-er-title"><a href="#">A DJ’s
                                                                        mission to tell Asian American stories,
                                                                        track by track</a></h3>
                                                            </div>
                                                        </div>
                                                        <div class="binduz-er-news-share">
                                                            <a href="#"><i class="fal fa-share"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-md-6">
                                            <div class="binduz-er-trending-news-list-item">
                                                <div class="binduz-er-trending-news-list-box">
                                                    <div class="binduz-er-thumb">
                                                        <img src="images/trending-news-list-thumb-1.jpg" alt="">
                                                    </div>
                                                    <div class="binduz-er-content">
                                                        <div class="binduz-er-meta-item">
                                                            <div class="binduz-er-meta-categories">
                                                                <a href="#">Technology</a>
                                                            </div>
                                                            <div class="binduz-er-meta-date">
                                                                <span><i class="fal fa-calendar-alt"></i> 14th
                                                                    February 2020</span>
                                                            </div>
                                                        </div>
                                                        <div class="binduz-er-trending-news-list-title">
                                                            <h4 class="binduz-er-title"><a href="#">Bring iconic
                                                                    Japanese characters to life with</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="binduz-er-trending-news-list-box">
                                                    <div class="binduz-er-thumb">
                                                        <img src="images/trending-news-list-thumb-2.jpg" alt="">
                                                    </div>
                                                    <div class="binduz-er-content">
                                                        <div class="binduz-er-meta-item">
                                                            <div class="binduz-er-meta-categories">
                                                                <a href="#">Technology</a>
                                                            </div>
                                                            <div class="binduz-er-meta-date">
                                                                <span><i class="fal fa-calendar-alt"></i> 14th
                                                                    February 2020</span>
                                                            </div>
                                                        </div>
                                                        <div class="binduz-er-trending-news-list-title">
                                                            <h4 class="binduz-er-title"><a href="#">Get ready for
                                                                    Hollywood’s big night with Google</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="binduz-er-trending-news-list-box">
                                                    <div class="binduz-er-thumb">
                                                        <img src="images/trending-news-list-thumb-3.jpg" alt="">
                                                    </div>
                                                    <div class="binduz-er-content">
                                                        <div class="binduz-er-meta-item">
                                                            <div class="binduz-er-meta-categories">
                                                                <a href="#">Technology</a>
                                                            </div>
                                                            <div class="binduz-er-meta-date">
                                                                <span><i class="fal fa-calendar-alt"></i> 14th
                                                                    February 2020</span>
                                                            </div>
                                                        </div>
                                                        <div class="binduz-er-trending-news-list-title">
                                                            <h4 class="binduz-er-title"><a href="#">Spot
                                                                    misinformation online with these tips</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-3" role="tabpanel" aria-labelledby="pills-3-tab">
                                    <div class="row">
                                        <div class="col-lg-7 col-md-6">
                                            <div class="binduz-er-trending-box">
                                                <div class="binduz-er-trending-news-item">
                                                    <img src="images/trending-thumb.png" alt="">
                                                    <div class="binduz-er-trending-news-overlay">
                                                        <div class="binduz-er-trending-news-meta">
                                                            <div class="binduz-er-meta-categories">
                                                                <a href="#">Technology</a>
                                                            </div>
                                                            <div class="binduz-er-meta-date">
                                                                <span><i class="fal fa-calendar-alt"></i> 24th
                                                                    February 2020</span>
                                                            </div>
                                                            <div class="binduz-er-trending-news-title">
                                                                <h3 class="binduz-er-title"><a href="#">A DJ’s
                                                                        mission to tell Asian American stories,
                                                                        track by track</a></h3>
                                                            </div>
                                                        </div>
                                                        <div class="binduz-er-news-share">
                                                            <a href="#"><i class="fal fa-share"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-md-6">
                                            <div class="binduz-er-trending-news-list-item">
                                                <div class="binduz-er-trending-news-list-box">
                                                    <div class="binduz-er-thumb">
                                                        <img src="images/trending-news-list-thumb-1.jpg" alt="">
                                                    </div>
                                                    <div class="binduz-er-content">
                                                        <div class="binduz-er-meta-item">
                                                            <div class="binduz-er-meta-categories">
                                                                <a href="#">Technology</a>
                                                            </div>
                                                            <div class="binduz-er-meta-date">
                                                                <span><i class="fal fa-calendar-alt"></i> 14th
                                                                    February 2020</span>
                                                            </div>
                                                        </div>
                                                        <div class="binduz-er-trending-news-list-title">
                                                            <h4 class="binduz-er-title"><a href="#">Bring iconic
                                                                    Japanese characters to life with</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="binduz-er-trending-news-list-box">
                                                    <div class="binduz-er-thumb">
                                                        <img src="images/trending-news-list-thumb-2.jpg" alt="">
                                                    </div>
                                                    <div class="binduz-er-content">
                                                        <div class="binduz-er-meta-item">
                                                            <div class="binduz-er-meta-categories">
                                                                <a href="#">Technology</a>
                                                            </div>
                                                            <div class="binduz-er-meta-date">
                                                                <span><i class="fal fa-calendar-alt"></i> 14th
                                                                    February 2020</span>
                                                            </div>
                                                        </div>
                                                        <div class="binduz-er-trending-news-list-title">
                                                            <h4 class="binduz-er-title"><a href="#">Get ready for
                                                                    Hollywood’s big night with Google</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="binduz-er-trending-news-list-box">
                                                    <div class="binduz-er-thumb">
                                                        <img src="images/trending-news-list-thumb-3.jpg" alt="">
                                                    </div>
                                                    <div class="binduz-er-content">
                                                        <div class="binduz-er-meta-item">
                                                            <div class="binduz-er-meta-categories">
                                                                <a href="#">Technology</a>
                                                            </div>
                                                            <div class="binduz-er-meta-date">
                                                                <span><i class="fal fa-calendar-alt"></i> 14th
                                                                    February 2020</span>
                                                            </div>
                                                        </div>
                                                        <div class="binduz-er-trending-news-list-title">
                                                            <h4 class="binduz-er-title"><a href="#">Spot
                                                                    misinformation online with these tips</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-4" role="tabpanel" aria-labelledby="pills-4-tab">
                                    <div class="row">
                                        <div class="col-lg-7 col-md-6">
                                            <div class="binduz-er-trending-box">
                                                <div class="binduz-er-trending-news-item">
                                                    <img src="images/trending-thumb.png" alt="">
                                                    <div class="binduz-er-trending-news-overlay">
                                                        <div class="binduz-er-trending-news-meta">
                                                            <div class="binduz-er-meta-categories">
                                                                <a href="#">Technology</a>
                                                            </div>
                                                            <div class="binduz-er-meta-date">
                                                                <span><i class="fal fa-calendar-alt"></i> 24th
                                                                    February 2020</span>
                                                            </div>
                                                            <div class="binduz-er-trending-news-title">
                                                                <h3 class="binduz-er-title"><a href="#">A DJ’s
                                                                        mission to tell Asian American stories,
                                                                        track by track</a></h3>
                                                            </div>
                                                        </div>
                                                        <div class="binduz-er-news-share">
                                                            <a href="#"><i class="fal fa-share"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-md-6">
                                            <div class="binduz-er-trending-news-list-item">
                                                <div class="binduz-er-trending-news-list-box">
                                                    <div class="binduz-er-thumb">
                                                        <img src="images/trending-news-list-thumb-1.jpg" alt="">
                                                    </div>
                                                    <div class="binduz-er-content">
                                                        <div class="binduz-er-meta-item">
                                                            <div class="binduz-er-meta-categories">
                                                                <a href="#">Technology</a>
                                                            </div>
                                                            <div class="binduz-er-meta-date">
                                                                <span><i class="fal fa-calendar-alt"></i> 14th
                                                                    February 2020</span>
                                                            </div>
                                                        </div>
                                                        <div class="binduz-er-trending-news-list-title">
                                                            <h4 class="binduz-er-title"><a href="#">Bring iconic
                                                                    Japanese characters to life with</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="binduz-er-trending-news-list-box">
                                                    <div class="binduz-er-thumb">
                                                        <img src="images/trending-news-list-thumb-2.jpg" alt="">
                                                    </div>
                                                    <div class="binduz-er-content">
                                                        <div class="binduz-er-meta-item">
                                                            <div class="binduz-er-meta-categories">
                                                                <a href="#">Technology</a>
                                                            </div>
                                                            <div class="binduz-er-meta-date">
                                                                <span><i class="fal fa-calendar-alt"></i> 14th
                                                                    February 2020</span>
                                                            </div>
                                                        </div>
                                                        <div class="binduz-er-trending-news-list-title">
                                                            <h4 class="binduz-er-title"><a href="#">Get ready for
                                                                    Hollywood’s big night with Google</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="binduz-er-trending-news-list-box">
                                                    <div class="binduz-er-thumb">
                                                        <img src="images/trending-news-list-thumb-3.jpg" alt="">
                                                    </div>
                                                    <div class="binduz-er-content">
                                                        <div class="binduz-er-meta-item">
                                                            <div class="binduz-er-meta-categories">
                                                                <a href="#">Technology</a>
                                                            </div>
                                                            <div class="binduz-er-meta-date">
                                                                <span><i class="fal fa-calendar-alt"></i> 14th
                                                                    February 2020</span>
                                                            </div>
                                                        </div>
                                                        <div class="binduz-er-trending-news-list-title">
                                                            <h4 class="binduz-er-title"><a href="#">Spot
                                                                    misinformation online with these tips</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-5" role="tabpanel" aria-labelledby="pills-5-tab">
                                    <div class="row">
                                        <div class="col-lg-7 col-md-6">
                                            <div class="binduz-er-trending-box">
                                                <div class="binduz-er-trending-news-item">
                                                    <img src="images/trending-thumb.png" alt="">
                                                    <div class="binduz-er-trending-news-overlay">
                                                        <div class="binduz-er-trending-news-meta">
                                                            <div class="binduz-er-meta-categories">
                                                                <a href="#">Technology</a>
                                                            </div>
                                                            <div class="binduz-er-meta-date">
                                                                <span><i class="fal fa-calendar-alt"></i> 24th
                                                                    February 2020</span>
                                                            </div>
                                                            <div class="binduz-er-trending-news-title">
                                                                <h3 class="binduz-er-title"><a href="#">A DJ’s
                                                                        mission to tell Asian American stories,
                                                                        track by track</a></h3>
                                                            </div>
                                                        </div>
                                                        <div class="binduz-er-news-share">
                                                            <a href="#"><i class="fal fa-share"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-md-6">
                                            <div class="binduz-er-trending-news-list-item">
                                                <div class="binduz-er-trending-news-list-box">
                                                    <div class="binduz-er-thumb">
                                                        <img src="images/trending-news-list-thumb-1.jpg" alt="">
                                                    </div>
                                                    <div class="binduz-er-content">
                                                        <div class="binduz-er-meta-item">
                                                            <div class="binduz-er-meta-categories">
                                                                <a href="#">Technology</a>
                                                            </div>
                                                            <div class="binduz-er-meta-date">
                                                                <span><i class="fal fa-calendar-alt"></i> 14th
                                                                    February 2020</span>
                                                            </div>
                                                        </div>
                                                        <div class="binduz-er-trending-news-list-title">
                                                            <h4 class="binduz-er-title"><a href="#">Bring iconic
                                                                    Japanese characters to life with</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="binduz-er-trending-news-list-box">
                                                    <div class="binduz-er-thumb">
                                                        <img src="images/trending-news-list-thumb-2.jpg" alt="">
                                                    </div>
                                                    <div class="binduz-er-content">
                                                        <div class="binduz-er-meta-item">
                                                            <div class="binduz-er-meta-categories">
                                                                <a href="#">Technology</a>
                                                            </div>
                                                            <div class="binduz-er-meta-date">
                                                                <span><i class="fal fa-calendar-alt"></i> 14th
                                                                    February 2020</span>
                                                            </div>
                                                        </div>
                                                        <div class="binduz-er-trending-news-list-title">
                                                            <h4 class="binduz-er-title"><a href="#">Get ready for
                                                                    Hollywood’s big night with Google</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="binduz-er-trending-news-list-box">
                                                    <div class="binduz-er-thumb">
                                                        <img src="images/trending-news-list-thumb-3.jpg" alt="">
                                                    </div>
                                                    <div class="binduz-er-content">
                                                        <div class="binduz-er-meta-item">
                                                            <div class="binduz-er-meta-categories">
                                                                <a href="#">Technology</a>
                                                            </div>
                                                            <div class="binduz-er-meta-date">
                                                                <span><i class="fal fa-calendar-alt"></i> 14th
                                                                    February 2020</span>
                                                            </div>
                                                        </div>
                                                        <div class="binduz-er-trending-news-list-title">
                                                            <h4 class="binduz-er-title"><a href="#">Spot
                                                                    misinformation online with these tips</a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- promo start -->
            <div class="  col-lg-3 col-md-12">

                <?php
                            include("admin/config.php");
                            $sql = "SELECT * FROM promo ORDER BY prid DESC limit 1 ";
                            $result = $config->query($sql);

                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    // $para1_preview = implode(' ', array_slice(str_word_count($row['prfrontline'], 1), 0, 1));

                                    ?>
                <div class="binduz-er-sidebar-add-box mt-40">
                    <div class="binduz-er-logo">
                        <a href="#"><img src="./admin/<?php echo $row['primage']; ?>" alt=""></a>
                    </div>
                    <p> <a href="#"><?php echo $row['prfrontline']; ?></a>

                    </p>
                    <a class="binduz-er-main-btn" style="color:white;" href="<?php echo $row['prurl']; ?>">Visit
                        website</a>
                </div>
            </div>
        </div>
    </div>
    <?php
}
}
?>
</section>

<!-- rameez code end   -->
<!--====== BINDUZ TRENDING PART ENDS ======-->

<!--====== BINDUZ FEATURED PART START ======-->

<section class="binduz-er-featured-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="binduz-er-featured-slider mt-30">
                    <div class="binduz-er-featured-title">
                        <h3 class="binduz-er-title">Featured</h3>
                    </div>
                    <div class="binduz-er-featured-slider-item"
                        style="background-color:gray; height:380px; border-radius: 5px;" class="feature">
                        <h2
                            style="display: flex !important;     align-items: center;     justify-content: center; margin-top:150px; color:#fff;">
                            Ads</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-6">
                <div class="binduz-er-trending-news-item mb-30">
                    <img src="images/featured-trending-thumb-1.jpg" alt="">
                    <div class="binduz-er-trending-news-overlay">
                        <div class="binduz-er-trending-news-meta">
                            <div class="binduz-er-meta-categories">
                                <a href="#">Technology</a>
                            </div>
                            <div class="binduz-er-meta-date">
                                <span><i class="fal fa-calendar-alt"></i> 24th February 2020</span>
                            </div>
                            <div class="binduz-er-trending-news-title">
                                <h3 class="binduz-er-title"><a href="#">Trash to treasure: How Google thinks about
                                        deconstruction</a></h3>
                            </div>
                        </div>
                        <div class="binduz-er-news-share">
                            <a href="#"><i class="fal fa-share"></i></a>
                        </div>
                    </div>
                </div>
                <div class="binduz-er-trending-news-item mb-30">
                    <img src="images/featured-trending-thumb-2.jpg" alt="">
                    <div class="binduz-er-trending-news-overlay">
                        <div class="binduz-er-trending-news-meta">
                            <div class="binduz-er-meta-categories">
                                <a href="#">Technology</a>
                            </div>
                            <div class="binduz-er-meta-date">
                                <span><i class="fal fa-calendar-alt"></i> 24th February 2020</span>
                            </div>
                            <div class="binduz-er-trending-news-title">
                                <h3 class="binduz-er-title"><a href="#">Spring Fashion Show at the University of
                                        Michigan Has Started.</a></h3>
                            </div>
                        </div>
                        <div class="binduz-er-news-share">
                            <a href="#"><i class="fal fa-share"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="binduz-er-sidebar-social">
                    <div class="binduz-er-sidebar-title">
                        <h4 class="binduz-er-title">Social Feed</h4>
                    </div>
                    <div class="binduz-er-social-list">
                        <div class="binduz-er-list">
                            <a href="#">
                                <span><i class="fab fa-facebook-f"></i> <span class="followers"></span> Likes</span>
                                <span>Like</span>
                            </a>
                            <a href="#">
                                <span><i class="fab fa-twitter"></i> <span>15000</span> Likes</span>
                                <span>Tweet</span>
                            </a>
                            <a href="#">
                                <span><i class="fab fa-behance"></i> <span>5k+</span> Follower</span>
                                <span>Follow</span>
                            </a>
                            <a href="#">
                                <span><i class="fab fa-youtube"></i> <span>15000</span> Subscribe</span>
                                <span>Subscribe</span>
                            </a>
                        </div>
                    </div>
                    <div class="binduz-er-sidebar-add mt-20">
                        <h3 class="binduz-er-title">Build your website &amp; <span>grow your business</span></h3>
                        <a class="binduz-er-main-btn" href="#">Purchase</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--====== BINDUZ FEATURED PART ENDS ======-->

<!--====== BINDUZ VIDEO POST PART START ======-->

<section class="binduz-er-video-post-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="binduz-er-video-post-topbar">
                    <div class="binduz-er-video-post-title">
                        <h3 class="binduz-er-title">Video Post</h3>
                    </div>
                </div>
            </div>

        </div>
        <div class="tab-content" id="pills-tabContent-2">
            <div class="tab-pane fade show active" id="pills-21" role="tabpanel" aria-labelledby="pills-21-tab">
                <div class=" row">
                    <?php
                        include("admin/config.php");

                        $sql = "SELECT v_title, v_thumbnail, v_video, v_frontline, v_date FROM video ORDER BY v_id DESC limit 8";
                        $result = $config->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                ?>
                    <div class="col-lg-3 col-md-6 order-lg-1 order-1">
                        <div class="binduz-er-video-post-item">
                            <div class="binduz-er-trending-news-list-box">
                                <div class="binduz-er-thumb">
                                    <img src="./admin/<?php echo $row['v_thumbnail']; ?>" alt="" height="220px">
                                    <div class="binduz-er-play">
                                        <a class="binduz-er-video-popup"
                                            href="./admin/<?php echo $row['v_video']; ?>"><i
                                                class="fas fa-play"></i></a>
                                    </div>
                                </div>
                                <div class="binduz-er-content">
                                    <div class="binduz-er-meta-item">
                                        <div class="binduz-er-meta-categories">
                                            <a href="#"><?php echo $row['v_frontline']; ?></a>
                                        </div>
                                        <div class="binduz-er-meta-date">
                                            <span><i class="fal fa-calendar-alt"></i>
                                                <?php echo $row['v_date']; ?></span>
                                        </div>
                                    </div>
                                    <div class="binduz-er-trending-news-list-title">
                                        <h4 class="binduz-er-title"><a href="#"><?php echo $row['v_title']; ?></a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                            }
                        } else {
                            echo "0 results";
                        }

                        $config->close();
                        ?>

                </div>
                <div>
                    <a href="View_Video_article.php" class="btn view-blogs"
                        style="color:black;margin-bottom:20px; display: flex; align-items:center; justify-content:center; position: relative; font-size: large;font-weight: 600; text-decoration: none;outline: none;background: none;border: none;list-style: none;    box-shadow: 0px 0px 7px rgba(0,0,0,0.5);">View
                        More Videos</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!--====== BINDUZ VIDEO POST PART ENDS ======-->

<!--====== BINDUZ TRENDING TODAY PART START ======-->

<section class="binduz-er-trending-today-area">
    <div class="binduz-er-bg-cover"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="binduz-er-trending-today-topbar">
                    <div class="binduz-er-trending-today-title">
                        <h3 class="binduz-er-title">What's trending today</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Ubaid Code  -->
            <?php
                include("admin/config.php");
                $sql = "SELECT * FROM blog ORDER BY id DESC limit 3";
                $result = $config->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $para1_preview = implode(' ', array_slice(str_word_count($row['para1'], 1), 0, 15));
                        ?>
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="binduz-er-main-posts-item" style="border: radius 10px; height: 500px;">
                    <div class="binduz-er-trending-news-list-box">
                        <div class="binduz-er-thumb">
                        <a href="blogPost.php?b_id=<?php echo $row['id'] ?>"> <img src="./admin/<?php echo $row['titleimage'] ?>" alt=""
                                style="height:200px; height:250px"></a>


                        </div>
                        <div class="binduz-er-content" style="height:180px; position:relative; border: 1px solid gray;">
                            <div class="binduz-er-meta-item">
                                <div class="binduz-er-meta-categories">
                                    <a href="blogPost.php?b_id=<?php echo $row['id'] ?>"><?php echo $row['title'] ?></a>
                                </div>
                                <div class="binduz-er-meta-date">
                                    <span><i class="fal fa-calendar-alt"></i> <?php echo $row['date'] ?></span>
                                </div>

                            </div>
                            <div class="binduz-er-trending-news-list-title">
                                <h4 class="binduz-er-title"><a href="blogPost.php?b_id=<?php echo $row['id'] ?>"
                                        style="color: #fff"><?php echo $row['frontline'] ?></a></h4>
                            </div>
                            <a href="blogPost.php?b_id=<?php echo $row['id'] ?>"
                                style="position:absolute; right:10px; top:135px; padding: 2px 10px; border-radius: 5px; color:#fff; background-color:#F63A3A;"
                                class="readmore">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                    }
                }
                ?>
        </div>
    </div>
</section>

<!--====== BINDUZ TRENDING TODAY PART ENDS ======-->

<!--====== BINDUZ MAIN POSTS PART START ======-->

<section class="binduz-er-main-posts-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="binduz-er-video-post-topbar">
                    <div class="binduz-er-video-post-title">
                        <h3 class="binduz-er-title">Main Posts</h3>
                    </div>
                </div>
                <div class="row">

                    <!-- Ubaid Code  -->
                    <?php
                        include("admin/config.php");
                        $sql = "SELECT * FROM blog ORDER BY id DESC limit 6";
                        $result = $config->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
        $para1_preview = implode(' ', array_slice(preg_split('/\s+/', $row['para1']), 0, 25));

                                // $para1_preview = implode(' ', array_slice(str_word_count($row['para1'], 1), 0, 15));
                                ?>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="binduz-er-main-posts-item"
                            style="border: radius 10px; height: 500px;margin-top:50px;">
                            <div class="binduz-er-trending-news-list-box">
                                <div class="binduz-er-thumb">
                                    <a href="blogPost.php?b_id=<?php echo $row['id'] ?>"><img
                                            src="./admin/<?php echo $row['titleimage'] ?>" alt=""
                                            style="height:250px"></a>


                                </div>
                                <div class="binduz-er-content" style="height:300px; position:relative">
                                    <div class="binduz-er-meta-item">
                                        <div class="binduz-er-meta-categories">
                                            <a
                                                href="blogPost.php?b_id=<?php echo $row['id'] ?>"><?php echo $row['title'] ?></a>
                                        </div>
                                        <div class="binduz-er-meta-date">
                                            <span><i class="fal fa-calendar-alt"></i>
                                                <?php echo $row['date'] ?></span>
                                        </div>
                                    </div>
                                    <div class="binduz-er-trending-news-list-title">
                                        <h4 class="binduz-er-title"><a
                                                href="blogPost.php?b_id=<?php echo $row['id'] ?>"><?php echo $row['frontline'] ?></a>
                                        </h4>
                                        <a href="blogPost.php?b_id=<?php echo $row['id'] ?>">
                                            <p style="line-clamp: 3px;color:black;"><?php echo $para1_preview ?></p>
                                        </a>
                                    </div>
                                    <a href="blogPost.php?b_id=<?php echo $row['id'] ?>"
                                        style="position:absolute; right:10px; top:260px; padding: 2px 5px; border-radius: 5px; color:#fff; background-color:#F63A3A;"
                                        class="readmore">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                            }
                        }
                        ?>


                </div>
                <div>
                    <a href="View_Blog_article.php" class="btn view-blogs"
                        style="color:black;margin-top:50px; display: flex; align-items:center; justify-content:center; position: relative; font-size: large;font-weight: 600; text-decoration: none;outline: none;background: none;border: none;list-style: none;    box-shadow: 0px 0px 7px rgba(0,0,0,0.5);">View
                        More Blogs</a>
                </div>

            </div>
            <div class="col-lg-3">
                <div class="binduz-er-sidebar-about">
                    <div class="binduz-er-sidebar-title">
                        <h4 class="binduz-er-title">About Me</h4>
                    </div>
                    <div class="binduz-er-sidebar-about-item">
                        <div class="binduz-er-sidebar-about-user d-flex">
                            <div class="binduz-er-thumb">
                                <img src="images/user.jpg" alt="">
                            </div>
                            <div class="binduz-er-content">
                                <h4 class="binduz-er-title">Miranda Halim</h4>
                                <span>Author</span>
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="binduz-er-text">
                            <p>The functional aspect comes first in the work process because it’s the core of the
                                object: What is its purpose? something else?</p>
                            <a class="binduz-er-main-btn" href="#">Connect With Me</a>
                        </div>
                    </div>
                </div>
                <div class="binduz-er-sidebar-latest-post">
                    <div class="binduz-er-sidebar-title">
                        <h4 class="binduz-er-title">Latest Post</h4>
                    </div>
                    <div class="binduz-er-sidebar-latest-post-box">
                        <div class="binduz-er-sidebar-latest-post-item">
                            <div class="binduz-er-thumb">
                                <img src="images/latest-post-1.jpg" alt="latest">
                            </div>
                            <div class="binduz-er-content">
                                <span><i class="fal fa-calendar-alt"></i> 24th February 2020</span>
                                <h4 class="binduz-er-title"><a href="#">Introducing Android Earthquake Alerts</a>
                                </h4>
                            </div>
                        </div>
                        <div class="binduz-er-sidebar-latest-post-item">
                            <div class="binduz-er-thumb">
                                <img src="images/latest-post-2.jpg" alt="latest">
                            </div>
                            <div class="binduz-er-content">
                                <span><i class="fal fa-calendar-alt"></i> 24th February 2020</span>
                                <h4 class="binduz-er-title"><a href="#">Loud and clear: AI is improving Assistant
                                    </a></h4>
                            </div>
                        </div>
                        <div class="binduz-er-sidebar-latest-post-item">
                            <div class="binduz-er-thumb">
                                <img src="images/latest-post-3.jpg" alt="latest">
                            </div>
                            <div class="binduz-er-content">
                                <span><i class="fal fa-calendar-alt"></i> 24th February 2020</span>
                                <h4 class="binduz-er-title"><a href="#">Tips and shortcuts for a more productive</a>
                                </h4>
                            </div>
                        </div>
                        <div class="binduz-er-sidebar-latest-post-item">
                            <div class="binduz-er-thumb">
                                <img src="images/latest-post-4.jpg" alt="latest">
                            </div>
                            <div class="binduz-er-content">
                                <span><i class="fal fa-calendar-alt"></i> 24th February 2020</span>
                                <h4 class="binduz-er-title"><a href="#">Sparks of inspiration to the new trend
                                        2021</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- promo 2nd  -->


                <?php
                                            include("admin/config.php");
                                            $sql = "SELECT * FROM promo ORDER BY prid DESC LIMIT 1 OFFSET 1";
                                            $result = $config->query($sql);

                                            if ($result->num_rows > 0) {
                                                while ($row = $result->fetch_assoc()) {
                                                    // $para1_preview = implode(' ', array_slice(str_word_count($row['prfrontline'], 1), 0, 1));

                                                    ?>
                <div class="binduz-er-sidebar-add-box mt-40">
                    <div class="binduz-er-logo">
                        <a href="#"><img src="./admin/<?php echo $row['primage']; ?>" alt=""></a>
                    </div>
                    <p> <a href="#"><?php echo $row['prfrontline']; ?></a>

                    </p>
                    <a class="binduz-er-main-btn" style="color:white;" href="<?php echo $row['prurl']; ?>">Visit
                        website</a>
                </div>
            </div>
        </div>
    </div>
    <?php
   }
  }
   ?>
</section>

<!--====== BINDUZ MAIN POSTS PART ENDS ======-->

<!--====== BINDUZ SOCIAL SHARE PART START ======-->

<!--====== BINDUZ SOCIAL SHARE PART ENDS ======-->


<!--====== BINDUZ FOOTER PART START ======-->


<!-- newsletter modal form ajax script -->
<script>
$(document).ready(function() {
    setTimeout(function() {
        $('#firstModal').modal('show');
    }, 3000);

    $('#subscribeButton').click(function() {
        var NewsName = $('#nameInput').val();
        var NewsEmail = $('#emailInput').val();

        var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(NewsEmail)) {
            alert('Invalid email address');
            return;
        }

        $.ajax({
            url: 'logic.php',
            method: 'POST',
            data: {
                NewsName: NewsName,
                NewsEmail: NewsEmail
            },
            success: function(response) {
                console.log(response);

                $('#firstModal').modal('hide');
            },
            error: function(error) {
                console.error('Error subscribing:', error);
            }
        });
    });
});
</script>

<?php
include("footer.php");
?>