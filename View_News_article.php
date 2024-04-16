<!-- rj -->
<?php
session_start();
include('header.php');
?>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

    * {
        /* font-family: "Roboto", sans-serif; */
        font-family: 'Poppins', sans-serif;
    }

    .sharp {
        color: white;
        position: relative;
        width: 100%;
        /* background-image: url('images/title2.jpg'); */
        background-size: cover;
        background-position: center;
    }

    .main-one h1 {
        background-color: rgba(0, 0, 0, 0.7);
        margin: 0;
        text-align: center;
        background-size: cover;
        color: white;
        padding-top: 230px;
        padding-bottom: 230px;
        font-size: 50px
    }

    .blog-post p {
        margin: 0;
        padding: 0;
        text-align: justify;
        line-height: 30px;
        font-size: 17px;
    }

    .frontline {
        font-weight: 700;
        font-style: italic;
        color: #fff !important;
        padding: 2px;
        margin-right: 5px;
        padding-left: 10px;
        border-radius: 5px;
    }

    .review {
        background-color: #282535;
        color: white;
        padding: 50px 0px 50px 0px;
        border-radius: 10px;
        font-size: 17px;
        margin-bottom: 50px;
    }

    .btn-review {
        border: none;
        border-radius: 5px
    }

    .btn-review:hover {
        border: none;
        background-color: white;
        color: #282535;
        border-radius: 5px;
        font-weight: 500;
        transition: 0.3s;
    }


    @media(max-width:990px) {
        .main-one h1 {
            background-color: rgba(0, 0, 0, 0.7);
            margin: 0;
            text-align: center;
            background-size: cover;
            color: white;
            padding-top: 100px;
            padding-bottom: 100px;
            font-size: 40px;
        }

        .blog-post p {
            text-align: justify;
            line-height: 30px;
            font-size: 16px;

        }

    }

    .title {
        /* padding: 50px; */
        text-align: center;
        /* background-color: aquamarine; */
        /* padding-left: 220px; */
    }

    .title p {
        font-weight: 600;
        border-left: 3px solid #F63A3A;
        padding-left: 10px !important;
    }

    .para1-image {
        border-radius: 5px;
        box-shadow: 2px 5px 10px rgba(0, 0, 0, 0.7);
    }


    .frontline {
        background-color: #F63A3A;
        color: #fff;
    }

    label {
        color: #fff;
        font-size: 18px;
        margin-bottom: 10px;
        margin-top: 20px;
        font-weight: 600;
        font-family: sans-serif;
    }

    input {
        height: 40px;
    }

    .contact {
        box-shadow: 2px 5px 10px rgba(0, 0, 0, 0.5);
        width: 500px;
    }

    .btn-review {
        background-color: #F63A3A;
        color: #fff;
        margin-top: 20px;
        padding: 0px 10px;
    }

    #name,
    #email,
    #message {
        border: 1px solid #F63A3A;
        transition: all 0.5s;
        outline: none;
    }

    #name:focus {
        border: 2px solid #282535;
    }

    #email:focus {
        border: 2px solid #282535;
    }

    #message:focus {
        border: 2px solid #282535;
    }

    .col-lg-6 {
        box-sizing: border-box;
        flex: 0 0 100%;
        max-width: 100%;
    }

    .blog-image {
        /* overflow: hidden; */
        padding-right: 10px;
    }

    .blog-image img {
        width: 580px;
        height: 500px;
    }

    .col {
        box-sizing: border-box;
    }

    .frontline {
        font-weight: bold;
        color: #443e60;
    }

    /* Add your other styles here */

    @media (min-width: 768px) {
        /* Adjust styles for tablets and larger devices */

        .col-lg-6 {
            flex: 0 0 50%;
            max-width: 50%;
        }

        .col {
            margin-left: 0;
        }
    }

    @media (min-width: 992px) {
        /* Adjust styles for desktops */

        .col-lg-6 {
            flex: 0 0 33.3333%;
            /* max-width: 33.3333%; */
        }
    }


</style>

<div class="sharp" style="background-image: url('./images/title1.jpg');">
    <div class="main-one">
        <h1 class="evo">
            LATEST NEWS
        </h1>
    </div>
</div>

<div class="row" style="margin: 20px;">
    <?php
    include("admin/config.php");

    $sql = "SELECT  N_id, N_frontline ,N_date, N_image, N_para FROM news";
    $result = $config->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $para1_preview = implode(' ', array_slice(str_word_count($row['N_para'], 1), 0, 25));

    ?>
              <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="binduz-er-main-posts-item" style="border: radius 10px; height: 500px;object-fit:cover;">
                    <div class="binduz-er-trending-news-list-box">
                        <div class="binduz-er-thumb">
                        <a href="trendingNews.php?N_id=<?php echo $row['N_id'] ?>"><img src="./admin/upload_images/<?php echo $row['N_image'] ?>" alt="" style="height:250px"></a>


                        </div>
                        <div class="binduz-er-content" style="height:220px; position:relative">
                            <div class="binduz-er-meta-item">
                                <div class="binduz-er-meta-categories">
                                    <a href="trendingNews.php?N_id=<?php echo $row['N_id'] ?>"><?php echo $row['N_frontline'] ?></a>
                                </div>
                                <div class="binduz-er-meta-date">
                                    <span><i class="fal fa-calendar-alt"></i> <?php echo $row['N_date'] ?></span>
                                </div>
                            </div>
                            <div class="binduz-er-trending-news-list-title">
                            <a style="color:black;" href="trendingNews.php?N_id=<?php echo $row['N_id'] ?>"> <p style="line-clamp: 3px;"><?php echo $para1_preview ?></p></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <?php
        }
    } else {
        echo "No Posts";
    }

    $config->close();
    ?>

</div>



<?php
include('footer.php');
?>



