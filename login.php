<?php
session_start();
include("header.php");

?>


<div>
    <h1 class="heading text-center mb-4" style='margin-top:80px;'>login</h1>
</div>

    <!-- Your login form -->
    <div>
    <div style='padding-bottom:80px;' class="row justify-content-center">
        <div class="col-lg-6">
            <div class="box">
                <form class="mb-5" action="logic.php" method="post">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" name="email" id="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" class="form-control" name="password" id="password" required>
                    </div>
                    <div class="mb-3">
                        <a href="signup.php">I don't have any account.</a>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-12">
                            <button type="submit" name="loginbtn" class="btn btn-block btn-primary rounded-0 py-2 px-4">Login</button>
                            <span class="submitting"></span>
                        </div>
                    </div>
                </form>
               
        </div>
    </div>
</div>


<?php
include("footer.php");
?>