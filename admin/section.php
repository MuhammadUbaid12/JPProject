<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EvoAdminify</title>
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/5.0.2/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.2.0/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/icheck-bootstrap/3.0.1/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/1.11.2/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.0.5/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="logout.php" class="nav-link">Logout</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user1-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Call me whenever you can...</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user8-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">I got your message bro</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user3-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i
                                                class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#"
                        role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php
        include("aside.php");
        ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- blog -->
            <div id="blog" style="padding:20px 10px 0px 10px;">
                <button style="margin-bottom:10px;" type="button" class="btn btn-primary" data-toggle="modal"
                    data-target="#addProductModal">
                    Add Blog
                </button>

                <!-- Modal -->
                <div class="modal fade" id="addProductModal" tabindex="-1" role="dialog"
                    aria-labelledby="addProductModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addProductModalLabel">Enter New Blog</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="container">
                                    <form method="POST" action="logic.php" enctype="multipart/form-data">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Title</label>
                                            <input type="text" class="form-control" name="b_title" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Front Line</label>
                                            <input type="text" class="form-control" name="b_frontline" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="name" class="form-label">Title Image</label>
                                            <input type="file" class="form-control" name="b_title_image" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Para1</label>
                                            <input type="text" class="form-control" name="b_para1" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Image1</label>
                                            <input type="file" class="form-control" name="b_image1" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Para2</label>
                                            <input type="text" class="form-control" name="b_para2" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="blog_image" class="form-label">Image 2 </label>
                                            <input type="file" class="form-control mb-2" name="b_image2" required>
                                        </div>

                                        <div id="dynamicFieldsContainer"></div>
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Date</label>
                                            <input type="Date" class="form-control" name="b_date" required></input>
                                        </div>

                                        <div class="mb-3">
                                            <label for="name" class="form-label">Written By</label>
                                            <input type="text" class="form-control" name="b_Writtenby" required>
                                        </div>

                                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                        <button type="button" class="btn btn-secondary" id="addFieldsBtn">Add Additional Fields</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
 



                <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    $(document).ready(function () {
        var fieldCounter = 3;

        $("#addFieldsBtn").click(function () {
            // Add a new paragraph field
            var paraField = '<div class="mb-3"><label for="name" class="form-label">Para' +
                fieldCounter + '</label><input type="text" class="form-control" name="b_para' +
                fieldCounter + '" required></div>';

            // Add a new image field
            var imageField = '<div class="mb-3"><label for="name" class="form-label">Image' +
                fieldCounter + '</label><input type="file" class="form-control" name="b_image' +
                fieldCounter + '" required></div>';

            // Append both fields to the container
            $("#dynamicFieldsContainer").append(paraField + imageField);

            // Increment the counter
            fieldCounter++;
        });
    });
</script>

                <style>
                .table-container {
                    overflow-x: auto;
                }

                .icon-container {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                }

                .icon-container a {
                    margin: 10px;
                    /* Adjust the margin as needed for spacing */
                    font-size: 20px;
                }
                </style>

                <div class="table-container">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Frontline</th>
                                <th>Title image</th>
                                <th>Para1</th>
                                <th>Image1</th>
                                <th>Para2</th>
                                <th>Image2</th>
                                <th>Date</th>
                                <th>Written By</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include("config.php");

                            // Connect to your database (assuming $config is your database connection)
                            $result = mysqli_query($config, "SELECT * FROM blog");

                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td>{$row['id']}</td>";
                                    echo "<td>{$row['title']}</td>";
                                    echo "<td>{$row['frontline']}</td>";
                                    echo "<td><img src='{$row['titleimage']}' width='100' height='120' alt='blog Image'></td>";
                                    echo "<td style='width:200px;'><div style='height: 200px; overflow-y: scroll;'>{$row['para1']}</div></td>";
                                    echo "<td><img src='{$row['image1']}' width='100' height='120' alt='blog Image'></td>";
                                    echo "<td style='width:200px;'><div style='height: 200px; overflow-y: scroll;'>{$row['para2']}</div></td>";
                                    echo "<td><img src='{$row['image2']}' width='100' height='120' alt='blog Image'></td>";
                                    echo "<td>{$row['date']}</td>";
                                    echo "<td>{$row['writtenby']}</td>";

                                    echo "<td>
                                    <div class='icon-container'>
                                        <a href='#' class='edit-blog' 
                                            data-id='{$row['id']}'
                                            data-title='{$row['title']}'
                                            data-frontline='{$row['frontline']}'
                                            data-titleimage='{$row['titleimage']}'
                                            data-para1='{$row['para1']}'
                                            data-image1='{$row['image1']}'
                                            data-para2='{$row['para2']}'
                                            data-image2='{$row['image2']}'
                                            data-date='{$row['date']}'
                                            data-writtenby='{$row['writtenby']}'
                                        ><i class='fas fa-edit'></i></a>
                                        <a style='color:red;' href='logic.php?id={$row['id']}'><i class='fas fa-trash'></i></a>
                                    </div>
                                  </td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='6'>No Blogs found</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>


                </tbody>
                </table>

                <!-- Modal for Update -->
                <div class="modal fade" id="updateBlogModal" tabindex="-1" role="dialog"
                    aria-labelledby="updateModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <!-- Add the "modal-lg" class for a larger modal -->
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="updateModalLabel">Edit Blog</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form id="editForm">

                                    <input type="hidden" name="id" id="editBlogId">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Title</label>
                                        <input type="text" class="form-control" name="edit_title" id="edit_title"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Front Line</label>
                                        <input type="text" class="form-control" name="edit_frontline"
                                            id="edit_frontline" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="name" class="form-label">Title Image</label>
                                        <input type="file" class="form-control" name="edit_title_image"
                                            id="edit_title_image" required>
                                        <img width="100" height="120" id="editTitleImagePreview" src="" alt="">

                                    </div>
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Para1</label>
                                        <input type="text" class="form-control" name="edit_para1" id="edit_para1"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Image1</label>
                                        <input type="file" class="form-control" name="edit_image1" id="edit_image1"
                                            required>
                                        <img width="100" height="120" id="edit_image1Preview" src="" alt="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Para2</label>
                                        <input type="text" class="form-control" name="edit_para2" id="edit_para2"
                                            required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="blog_image" class="form-label">Image 2 </label>
                                        <input type="file" class="form-control mb-2" name="edit_image2" id="edit_image2"
                                            required>
                                        <img id="edit_image2Preview" width="100" height="120" src="" alt="">
                                    </div>

                                    <div class="mb-3">
                                        <label for="name" class="form-label">Date</label>
                                        <input type="Date" class="form-control" name="edit_date" id="edit_date"
                                            required></input>
                                    </div>

                                    <div class="mb-3">
                                        <label for="name" class="form-label">Written By</label>
                                        <input type="text" class="form-control" name="edit_Writtenby"
                                            id="edit_Writtenby" required>
                                    </div>

                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" id="updateBlog" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- blog -->



            <!-- video blog -->

            <div id="video" style="padding:20px 10px 0px 10px;">
                <button style="margin-bottom:10px;" type="button" class="btn btn-primary" data-toggle="modal"
                    data-target="#addVideoModal">
                    Add video
                </button>

                <!-- Modal -->
                <div class="modal fade" id="addVideoModal" tabindex="-1" role="dialog"
                    aria-labelledby="addProductModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addVideoModalLabel">Enter New Blog</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="container">
                                    <form method="POST" action="logic.php" enctype="multipart/form-data">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Title</label>
                                            <input type="text" class="form-control" name="v_title" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="name" class="form-label">Thumbnail Image</label>
                                            <input type="file" class="form-control" name="v_thumbnail" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Video</label>
                                            <input type="file" class="form-control" name="v_video" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="name" class="form-label">Front Line</label>
                                            <input type="text" class="form-control" name="v_frontline" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="name" class="form-label">Date</label>
                                            <input type="Date" class="form-control" name="v_date" required></input>
                                        </div>

                                        <div class="mb-3">
                                            <label for="name" class="form-label">Upload By</label>
                                            <input type="text" class="form-control" name="v_upload" required>
                                        </div>

                                        <button name="VideoSubmit" type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <style>
                .table-container {
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
                </style>

                <div class="table-container">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Thumbnail</th>
                                <th>Video</th>
                                <th>FrontLine</th>
                                <th>Date</th>
                                <th>Upload By</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include("config.php");

                            $result = mysqli_query($config, "SELECT * FROM video");

                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td>{$row['v_id']}</td>";
                                    echo "<td>{$row['v_title']}</td>";
                                    echo "<td><img src='{$row['v_thumbnail']}' width='100' height='120' alt='video thumbnail'></td>";
                                    echo "<td><video width='200' height='150' controls><source src='{$row['v_video']}' type='video/mp4'>Your browser does not support the video tag.</video></td>";
                                    echo "<td>{$row['v_frontline']}</td>";
                                    echo "<td>{$row['v_date']}</td>";
                                    echo "<td>{$row['v_upload']}</td>";


                                    echo "<td>
                                    <div class='icon-container'>
                                        <a href='#' class='edit-video' 
                                            data-v_id='{$row['v_id']}'
                                            data-v_title='{$row['v_title']}'
                                            data-v_thumbnail='{$row['v_thumbnail']}'
                                            data-v_video='{$row['v_video']}'
                                            data-v_frontline='{$row['v_frontline']}'
                                            data-v_date='{$row['v_date']}'
                                            data-v_upload='{$row['v_upload']}'
                                            
                                        ><i class='fas fa-edit'></i></a>
                                        <a style='color:red;' href='logic.php?v_id={$row['v_id']}'><i class='fas fa-trash'></i></a>
                                    </div>
                                  </td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='6'>No Video Articles Found</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>


                </tbody>
                </table>

                <!-- Modal for Update -->
                <div class="modal fade" id="updateVideoModal" tabindex="-1" role="dialog"
                    aria-labelledby="updateModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <!-- Add the "modal-lg" class for a larger modal -->
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="updateModalLabel">Edit Article</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form id="editVideoForm">
                                    <input type="hidden" name="EditVideoId" id="EditVideoId">
                                    <div class="form-group">
                                        <label for="EditVideoTitle">Title</label>
                                        <input type="text" class="form-control" id="EditVideoTitle"
                                            name="EditVideoTitle">
                                    </div>
                                    <div class="form-group">
                                        <label for="EditVideoThumbnail">Thumbnail</label>
                                        <input type="file" class="form-control" id="EditVideoThumbnail"
                                            name="EditVideoThumbnail">
                                        <img src="" id="editVideoImagePreview" width="100" height="120"
                                            alt="Video Thumbnail">
                                    </div>
                                    <div class="form-group">
                                        <label for="EidtVideo">Video</label>
                                        <input type="file" class="form-control-file" id="EidtVideo" name="EidtVideo">
                                        <video controls id="EidtVideoPreview" class="form-control-file"
                                            name="EidtVideo"></video>
                                    </div>
                                    <div class="form-group">
                                        <label for="EditVideoFrontline">Frontline</label>
                                        <input type="text" class="form-control" id="EditVideoFrontline"
                                            name="EditVideoFrontline">
                                    </div>
                                    <div class="form-group">
                                        <label for="EditVideoDate">Date</label>
                                        <input type="text" class="form-control" id="EditVideoDate" name="EditVideoDate">
                                    </div>
                                    <div class="form-group">
                                        <label for="EditVideoUploadBy">Upload By</label>
                                        <input type="text" class="form-control" id="EditVideoUploadBy"
                                            name="EditVideoUploadBy">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" id="updateVideo" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

            <!-- video blog -->

            <!-- news -->


            <div id="news" style="padding:20px 10px 0px 10px;">
                <button style="margin-bottom:10px;" type="button" class="btn btn-primary" data-toggle="modal"
                    data-target="#addNewsModal">
                    Add News
                </button>

                <!-- Modal -->
                <div class="modal fade" id="addNewsModal" tabindex="-1" role="dialog"
                    aria-labelledby="addProductModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addVideoModalLabel">Enter New News</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="container">
                                    <form method="POST" action="logic.php" enctype="multipart/form-data">

                                        <div class="mb-3">
                                            <label for="name" class="form-label">Title</label>
                                            <input type="text" class="form-control" name="N_frontline" required>
                                        </div>



                                        <div class="mb-3">
                                            <label for="name" class="form-label"> Thumbnail</label>
                                            <input type="file" class="form-control" name="N_image" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="name" class="form-label">Frontline</label>
                                            <input type="text" class="form-control" name="N_para" id="N_para" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="name" class="form-label">Date</label>
                                            <input type="Date" class="form-control" name="N_date" required></input>
                                        </div>

                                        <button name="NewsSubmit" type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <style>
                .table-container {
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
                </style>

                <div class="table-container">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <!-- <th>Frontline</th> -->
                                <th>Title</th>
                                <th>Date</th>
                                <th>Thumbnail</th>
                                <!-- <th>Para</th> -->
                                <th>Frontline</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include("config.php");

                            // Assuming 'news' is the name of your table
                            $result = mysqli_query($config, "SELECT * FROM news");

                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td>{$row['N_id']}</td>";
                                    echo "<td>{$row['N_frontline']}</td>";
                                    echo "<td>{$row['N_date']}</td>";
                                    echo "<td><img src='upload_images/{$row['N_image']}' width='100' height='120' alt='news image'></td>";

                                    // echo "<td><img src='{$row['N_image']}' width='100' height='120' alt='News Image'></td>";
                                    echo "<td>{$row['N_para']}</td>";

                                    echo "<td>
                                    <div class='icon-container'>
                                        <a href='#' class='edit-news' 
                                            data-id='{$row['N_id']}'
                                            data-frontline='{$row['N_frontline']}'
                                            data-date='{$row['N_date']}'
                                            data-image='{$row['N_image']}'
                                            data-para='{$row['N_para']}'
                                        ><i class='fas fa-edit'></i></a>
                                        <a style='color:red;' href='logic.php?N_id={$row['N_id']}'><i class='fas fa-trash'></i></a>
                                    </div>
                                </td>";

                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='6'>No News found</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>



                <div class="modal fade" id="editNewsModal" tabindex="-1" role="dialog"
                    aria-labelledby="editNewsModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editNewsModalLabel">Edit News</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="container">
                                    <form id="editNewsForm" method="post" action="updateNews.php"
                                        enctype="multipart/form-data">


                                        <!-- You may need to use hidden input to store the ID of the news being edited -->
                                        <input type="hidden" name="edit_news_id" id="editNewsId">

                                        <div class="mb-3">
                                            <label for="edit_N_frontline" class="form-label">Front Line</label>
                                            <input type="text" class="form-control" name="edit_N_frontline"
                                                id="edit_N_frontline" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="edit_N_date" class="form-label">Date</label>
                                            <input type="Date" class="form-control" name="edit_N_date" id="edit_N_date"
                                                required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="edit_N_image" class="form-label">Image</label>
                                            <input type="file" class="form-control" name="edit_N_image"
                                                id="edit_N_image">
                                            <!-- Image preview placeholder -->
                                            <img width="100" height="120" id="edit_N_imagePreview" src="" alt="">
                                        </div>


                                        <div class="mb-3">
                                            <label for="edit_N_para" class="form-label">Para</label>
                                            <input type="text" class="form-control" name="edit_N_para" id="edit_N_para"
                                                required>
                                        </div>

                                        <button name="editNewsSubmit" type="submit" class="btn btn-primary">Save
                                            Changes</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- news -->


                <!-- contact -->
            </div>

            <div id="contact" style="padding:20px 10px 0px 10px;">
                <style>
                .table-container {
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
                </style>

                <div class="table-container">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Message</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include("config.php");

                            $result = mysqli_query($config, "SELECT * FROM contact");

                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td>{$row['id']}</td>";
                                    echo "<td>{$row['name']}</td>";
                                    echo "<td>{$row['email']}</td>";
                                    echo "<td>{$row['MESSAGE_TEXT']}</td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='6'> Data Not Found</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>


                </tbody>
                </table>
            </div>



            <!-- contact  -->

            <div id="newsletter" style="padding:20px 10px 0px 10px;">
                <style>
                .table-container {
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
                </style>

                <div class="table-container">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>

                                <!-- <th>Message</th> -->

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include("config.php");

                            $result = mysqli_query($config, "SELECT * FROM newsletter");

                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td>{$row['id']}</td>";
                                    echo "<td>{$row['name']}</td>";
                                    echo "<td>{$row['email']}</td>";
                                    // echo "<td>{$row['MESSAGE_TEXT']}</td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='6'> Data Not Found</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>


                </tbody>
                </table>
            </div>


            <!-- JOBS START -->



            <div id="JOBS" style="padding:20px 10px 0px 10px;">
                <H1>JOBS</H1>
                <style>
                .table-container {
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
                </style>

                <div class="table-container">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>JobTitle</th>
                                <th>Job location</th>
                                <th>JobType</th>
                                <th>Job Description</th>
                                <th>CompanyName</th>
                                <th>Tagline</th>
                                <th>Company Description</th>
                                <th> Company Website</th>
                                <th>facebook Link</th>
                                <th>Twitter Link</th>
                                <th>linkdin Link</th>
                                <th>Job Image</th>
                                <th>Company Logo</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include("config.php");

                            $result = mysqli_query($config, "SELECT * FROM job_table");

                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td>{$row['Jid']}</td>";
                                    echo "<td>{$row['JjobTitle']}</td>";
                                    echo "<td>{$row['Jlocation']}</td>";
                                    echo "<td>{$row['JjobType']}</td>";
                                    echo "<td>{$row['JjobDescription']}</td>";
                                    echo "<td>{$row['JcompanyName']}</td>";
                                    echo "<td>{$row['Jtagline']}</td>";
                                    echo "<td>{$row['JcompanyDescription']}</td>";
                                    echo "<td>{$row['Jwebsite']}</td>";
                                    echo "<td>{$row['JfacebookUsername']}</td>";
                                    echo "<td>{$row['JtwitterUsername']}</td>";
                                    echo "<td>{$row['JlinkedinUsername']}</td>";
                                    echo "<td><img src='upload_images{$row['jobImage']}' width='100' height='120' alt='job image'></td>";


                                    echo "<td><img src='admin/upload_images{$row['Jlogo']}' width='100' height='120' alt='logo image'></td>";
                                    echo "<td><a style='color:red;' href='logic.php?Jid={$row['Jid']}'><i class='fas fa-trash'></i></a>
                                    </td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='6'> Data Not Found</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>


                </tbody>
                </table>
            </div>
            <!-- JOBS END -->


            <!-- promotion start -->
            <!-- <div id="promotion" style="padding:20px 10px 0px 10px;">
            <H1>Promotion</H1> -->

            <div id="promotion" style="padding:20px 10px 0px 10px;">
                <button style="margin-bottom:10px;" type="button" class="btn btn-primary" data-toggle="modal"
                    data-target="#addpromotion">
                    Add Promotion
                </button>

                <!-- Modal -->
                <div class="modal fade" id="addpromotion" tabindex="-1" role="dialog"
                    aria-labelledby="addProductModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addpromotion">Enter New promotion</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="container">
                                    <form method="POST" action="logic.php" enctype="multipart/form-data">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Frontline</label>
                                            <input type="text" class="form-control" name="PFrontline" id="PID" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="name" class="form-label"> Company URL</label>
                                            <input type="URL" class="form-control" name="PURL" required>
                                        </div>


                                        <div class="mb-3">
                                            <label for="name" class="form-label">Color</label>
                                            <input type="color" class="form-control" name="PColor" required></input>
                                        </div>

                                        <button name="PSubmit" type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <style>
                .table-container {
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
                </style>

                <div class="table-container">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Frontline</th>
                                <th> Company url</th>
                                <th>color</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include("config.php");

                            $result = mysqli_query($config, "SELECT * FROM promotion");

                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td>{$row['PID']}</td>";
                                    echo "<td>{$row['PFrontline']}</td>";
                                    echo "<td>{$row['PURL']}</td>";
                                    echo "<td>{$row['PColor']}</td>";

                                    echo "<td><a style='color:red;' href='logic.php?PID={$row['PID']}'><i class='fas fa-trash'></i></a>
                                    </td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='6'> Data Not Found</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>


                </tbody>
                </table>
            </div>



            <!--  -->
            <div id="user" style="padding:20px 10px 0px 10px;">

                <style>
                .table-container {
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
                </style>

                <div class="table-container">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone No</th>
                                <th>Address</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include("config.php");

                            $result = mysqli_query($config, "SELECT * FROM signup WHERE `type` = 'job_post'");

                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td>{$row['Sid']}</td>";
                                    echo "<td>{$row['name']}</td>";
                                    echo "<td>{$row['email']}</td>";
                                    echo "<td>{$row['phoneNumber']}</td>";
                                    echo "<td>{$row['address']}</td>";

                                    echo "<td><button class='approve-button btn btn-sm btn-primary' style='color:white;' data-user-id='{$row['Sid']}' style='color:blue;'>{$row['status']}</button></td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='6'> Data Not Found</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>


                </tbody>
                </table>
            </div>
            <!--  -->


            <!-- adds promo -->

            <!--  -->
            <div id="addspromo" style="padding:20px 10px 0px 10px;">
                <button style="margin-bottom:10px;" type="button" class="btn btn-primary" data-toggle="modal"
                    data-target="#addspromoModal">
                    New adds
                </button>

                <!-- Modal -->
                <div class="modal fade" id="addspromoModal" tabindex="-1" role="dialog" aria-labelledby="addspromoLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addspromoLabel">Enter New Adds</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="container">
                                    <form method="POST" action="logic.php" enctype="multipart/form-data">

                                        <div class="mb-3">
                                            <label for="prfrontline" class="form-label">Frontline</label>
                                            <input type="text" class="form-control" name="prfrontline" id="prfrontline"
                                                required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="prurl" class="form-label"> Url</label>
                                            <input type="url" class="form-control" name="prurl" id="prurl" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="primage" class="form-label">Image</label>
                                            <input type="file" class="form-control" name="primage" id="primage"
                                                required>
                                        </div>

                                        <button name="addsSubmit" type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <style>
                .table-container {
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
                </style>

                <div class="table-container">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Frontline</th>
                                <th>URL</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                        include("config.php");

                        // Assuming 'news' is the name of your table
                        $result = mysqli_query($config, "SELECT * FROM promo");

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                echo "<td>{$row['prid']}</td>";
                                echo "<td>{$row['prfrontline']}</td>";
                                echo "<td>{$row['prurl']}</td>";
                                echo "<td><img src='{$row['primage']}' width='100' height='120' alt='adds image'></td>";

                                // echo "<td><img src='{$row['N_image']}' width='100' height='120' alt='News Image'></td>";
                        
                                echo "<td>
                      
                                <a style='color:red;' href='logic.php?prid={$row['prid']}'><i class='fas fa-trash'></i></a>
                                </td>";
                                echo "</tr>";
                                

                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='6'>No promo adds found</td></tr>";
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>


            <!-- apply start -->
<div id="apply" style="padding:20px 10px 0px 10px;">

<style>
    .table-container {
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
</style>

<div class="table-container">
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone No</th>
                <th>Address</th>
                <th>CV</th>
                <th>Message</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include("config.php");

            $result = mysqli_query($config, "SELECT * FROM apply ");

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>{$row['aid']}</td>";
                    echo "<td>{$row['aname']}</td>";
                    echo "<td>{$row['aemail']}</td>";
                    echo "<td>{$row['aphone']}</td>";
                    echo "<td>{$row['aaddress']}</td>";
                    echo "<td><a href='download.php?aid={$row['aid']}' target='_blank'>View CV</a></td> ";
                    echo "<td>{$row['amessage']}</td>";
                    echo "<td><a style='color:red;' href='logic.php?aid={$row['aid']}'><i class='fas fa-trash'></i></a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='8'> Data Not Found</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>

</div>

<!-- apply end -->


            <!--  -->
            <!-- Modal for Update -->
            <div class="modal fade" id="updateVideoModal" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <!-- Add the "modal-lg" class for a larger modal -->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="updateModalLabel">Edit Article</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="editVideoForm">
                                <input type="hidden" name="EditVideoId" id="EditVideoId">
                                <div class="form-group">
                                    <label for="EditVideoTitle">Title</label>
                                    <input type="text" class="form-control" id="EditVideoTitle" name="EditVideoTitle">
                                </div>
                                <div class="form-group">
                                    <label for="EditVideoThumbnail">Thumbnail</label>
                                    <input type="file" class="form-control" id="EditVideoThumbnail"
                                        name="EditVideoThumbnail">
                                    <img src="" id="editVideoImagePreview" width="100" height="120"
                                        alt="Video Thumbnail">
                                </div>
                                <div class="form-group">
                                    <label for="EidtVideo">Video</label>
                                    <input type="file" class="form-control-file" id="EidtVideo" name="EidtVideo">
                                    <video controls id="EidtVideoPreview" class="form-control-file"
                                        name="EidtVideo"></video>
                                </div>
                                <div class="form-group">
                                    <label for="EditVideoFrontline">Frontline</label>
                                    <input type="text" class="form-control" id="EditVideoFrontline"
                                        name="EditVideoFrontline">
                                </div>
                                <div class="form-group">
                                    <label for="EditVideoDate">Date</label>
                                    <input type="text" class="form-control" id="EditVideoDate" name="EditVideoDate">
                                </div>
                                <div class="form-group">
                                    <label for="EditVideoUploadBy">Upload By</label>
                                    <input type="text" class="form-control" id="EditVideoUploadBy"
                                        name="EditVideoUploadBy">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" id="updateVideo" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>


            </div>
        </div>





    </div>
    </div>

    <!-- newsletter -->
    </div>




    <!-- newsletter  -->


    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2022-2024 <a href="https://evodyna.com/">Evodynamics</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.2.0
        </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->


    <script>
    document.addEventListener("DOMContentLoaded", function() {
        // Function to get URL parameters by name
        function getParameterByName(name) {
            var url = new URL(window.location.href);
            return url.searchParams.get(name);
        }

        // Get the section parameter from the URL
        var sectionParam = getParameterByName("section");

        // Default to "product" section if no parameter is provided
        sectionParam = sectionParam || "Blog";

        // Show/hide sections based on the sectionParam
        var sections = ['blog', 'video', 'news', 'contact', 'newsletter', 'JOBS', 'promotion', 'user',
            'addspromo', 'apply'
        ];
        for (var i = 0; i < sections.length; i++) {
            var section = document.getElementById(sections[i]);
            if (sections[i] === sectionParam) {
                section.style.display = 'block';
            } else {
                section.style.display = 'none';
            }
        }
    });
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- jQuery UI 1.12.1 -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script>
    $(document).ready(function() {
        $('.approve-button').on('click', function() {
            var userId = $(this).data('user-id');

            $.ajax({
                url: 'update_status.php',
                method: 'POST',
                data: {
                    userId: userId,
                    status: 'approved'
                },
                success: function(response) {
                    console.log(response);
                    // Redirect to index.php after successful update
                    window.location.href = 'section.php?section=user'
                },
                error: function(error) {
                    console.error(error);
                }
            });
        });
    });
    </script>


    <script>
    /////////////news///////////
    $(document).ready(function() {
        $('.edit-news').on('click', function() {
            var id = $(this).data('id');
            var frontline = $(this).data('frontline');
            var date = $(this).data('date');
            var image = $(this).data('image');
            var para = $(this).data('para');

            // Populate the modal fields with the data
            $('#editNewsId').val(id);
            $('#edit_N_frontline').val(frontline);
            $('#edit_N_date').val(date);
            // You may want to show the image preview here
            $('#edit_N_imagePreview').attr('src', 'upload_images/' + image);
            $('#edit_N_para').val(para);

            // Show the modal
            $('#editNewsModal').modal('show');
        });

        // Add the logic for handling the update button click
        $('#editNewsSubmit').on('click', function() {
            var formData = new FormData($('#editNewsForm')[0]);
            $.ajax({
                type: 'POST',
                url: 'updateNews.php',
                data: formData,
                processData: false,
                contentType: false,
                dataType: 'json',
                success: function(response) {
                    if (response.status === 'success') {
                        alert(response.message);
                        $('#editNewsModal').modal('hide');
                        // Optionally, you can update the table row with the new values here
                    } else {
                        alert(response.message);
                    }
                }
            });
        });
    });
    //////////////news/////////
    ///////blog/////////
    $(document).ready(function() {
        $('.edit-blog').on('click', function() {
            var id = $(this).data('id');
            var title = $(this).data('title');
            var frontline = $(this).data('frontline');
            var titleimage = $(this).data('titleimage');
            var para1 = $(this).data('para1');
            var image1 = $(this).data('image1');
            var para2 = $(this).data('para2');
            var image2 = $(this).data('image2');
            var date = $(this).data('date');
            var writtenby = $(this).data('writtenby');


            $('#editBlogId').val(id);
            $('#edit_title').val(title);
            $('#edit_frontline').val(frontline);
            $('#edit_title_image').attr('src', titleimage);
            $('#edit_para1').val(para1);
            $('#edit_image1Preview').attr('src', image1);
            $('#edit_para2').val(para2);
            $('#edit_image2Preview').attr('src', image2);
            $('#edit_date').val(date);
            $('#edit_Writtenby').val(writtenby);
            $('#editTitleImagePreview').attr('src', titleimage);

            $('#updateBlogModal').modal('show');
        });

        $('#updateBlog').on('click', function() {
            var formData = new FormData($('#editForm')[0]);
            $.ajax({
                type: 'POST',
                url: 'logic.php',
                data: formData,
                processData: false,
                contentType: false,
                dataType: 'json',
                success: function(response) {
                    if (response.status === 'success') {
                        alert(response.message);
                        $('#updateBlogModal').modal('hide');
                        // Update the table row with the new values
                        $('#edit_title').val(response.blog.title);
                        $('#edit_frontline').val(response.blog.frontline);
                        $('#editTitleImagePreview').attr('src', response.blog.titleimage);
                        $('#edit_para1').val(response.blog.para1);
                        $('#edit_image1Preview').attr('src', response.blog.titleimage);
                        $('#edit_para2').val(response.blog.para2);
                        $('#edit_image2Preview').attr('src', response.blog.titleimage);
                        $('#edit_date').val(response.blog.date);
                        $('#edit_Writtenby').val(response.blog.writtenby);
                        // Redirect to index.php
                        window.location.href = 'section.php?section=blog';
                    } else {
                        alert(response.message);
                    }
                }
            });
        });
    });
    ///////blog//////////



    $(document).ready(function() {
        $('.edit-video').on('click', function() {
            var video_id = $(this).data('v_id');
            var v_title = $(this).data('v_title');
            var v_thumbnail = $(this).data('v_thumbnail');
            var v_video = $(this).data('v_video');
            var v_frontline = $(this).data('v_frontline');
            var v_date = $(this).data('v_date');
            var v_upload = $(this).data('v_upload');

            console.log('Thumbnail Path:', v_thumbnail);

            $('#EditVideoId').val(video_id);
            $('#EditVideoTitle').val(v_title);
            $('#editVideoImagePreview').attr('src', v_thumbnail);
            $('#EidtVideoPreview').attr('src', v_video);
            $('#EditVideoFrontline').val(v_frontline);
            $('#EditVideoDate').val(v_date);
            $('#EditVideoUploadBy').val(v_upload);

            $('#updateVideoModal').modal('show');
        });

        $('#updateVideo').on('click', function() {
            var formData = new FormData($('#editVideoForm')[0]);
            $.ajax({
                type: 'POST',
                url: 'logic.php',
                data: formData,
                processData: false,
                contentType: false,
                dataType: 'json',
                success: function(response) {
                    if (response.status === 'success') {
                        alert(response.message);
                        $('#updateVideoModal').modal('hide');
                        // Use the correct ID here
                        $('#EditVideoId').val(response.video.v_id);
                        $('#EditVideoTitle').val(response.video.v_title);
                        $('#editVideoImagePreview').attr('src', response.video.v_thumbnail);
                        $('#EidtVideoPreview').attr('src', response.video.v_video);
                        $('#EditVideoFrontline').val(response.video.v_frontline);
                        $('#EditVideoDate').val(response.video.v_date);
                        $('#EditVideoUploadBy').val(response.video.v_upload);
                        window.location.href = 'section.php?section=video';
                    } else {
                        alert(response.message);
                    }
                },
                error: function(xhr, status, error) {
                    console.error('AJAX Error:', status, error);
                    console.log(xhr
                        .responseText
                    ); // Log the response text for detailed error information
                    alert('Failed to update video. Please try again.');
                }
            });

        });
    });









    // $(document).ready(function() {
    //     $('.edit-product').on('click', function() {
    //         var id = $(this).data('id');
    //         var name = $(this).data('name');
    //         var price = $(this).data('price');
    //         var category = $(this).data('category');
    //         var detail = $(this).data('detail');
    //         var image = $(this).data('image');

    //         $('#editProductId').val(id);
    //         $('#editName').val(name);
    //         $('#editPrice').val(price);
    //         $('#editImagePreview').attr('src', image);
    //         $('#editCategory').val(category);
    //         $('#editDetail').val(detail);

    //         $('#updateModal').modal('show');
    //     });

    //     $('#updateProduct').on('click', function() {
    //         var formData = new FormData($('#editForm')[0]);
    //         $.ajax({
    //             type: 'POST',
    //             url: 'logic.php',
    //             data: formData,
    //             processData: false,
    //             contentType: false,
    //             dataType: 'json',
    //             success: function(response) {
    //                 if (response.status === 'success') {
    //                     alert(response.message);
    //                     $('#updateModal').modal('hide');
    //                     $('#editName').val(response.product.p_name);
    //                     $('#editPrice').val(response.product.p_price);
    //                     $('#editCategory').val(response.product.p_category);
    //                     $('#editDetail').val(response.product.p_details);
    //                     $('#editImagePreview').attr('src', response.product.p_image);
    //                     window.location.href = 'section.php?section=product';
    //                 } else {
    //                     alert(response.message);
    //                 }
    //             }
    //         });
    //     });
    // });
    </script>

    </script>

    <script>
    $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <!-- Chart.js 3.7.0 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
    <!-- jQuery Sparklines 2.1.2 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js"></script>
    <!-- JQVMap 1.5.1 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/jquery.vmap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob 1.2.11 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Knob/1.2.11/jquery.knob.min.js"></script>
    <!-- Moment.js 2.29.1 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <!-- DateRangePicker 3.1.3 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.1.3/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.2.0/js/tempusdominus-bootstrap-4.min.js">
    </script>
    <!-- Summernote 0.8.18 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js"></script>
    <!-- OverlayScrollbars 1.11.2 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/1.11.2/js/jquery.overlayScrollbars.min.js">
    </script>
    <!-- AdminLTE App -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/js/pages/dashboard.js"></script>
    <!-- Bootstrap JS CDN, Popper.js CDN, and jQuery CDN -->


</body>

</html>