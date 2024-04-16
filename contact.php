<?php
session_start();
include('header.php');

?>
<div class="content">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-6 mr-auto">
<div class="mb-5">
<h3 class="text-danger mb-4">Contact Info</h3>
<p class="text-gray">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus blanditiis, perferendis aliquam.</p>
</div>
<div class="row">
<div class="col-md-6">
<h3 class="text-danger h5 mb-3"> <b>London </b></h3>
<ul class="list-unstyled mb-5">
<li class="d-flex text-gray mb-2">
<span class="mr-3"><span class="icon-map"></span></span> 34 Street Name, City Name Here, United States
</li>
<li class="d-flex text-gray mb-2"><span class="mr-3"><span class="icon-phone"></span></span> +1 (222) 345 6789</li>
<li class="d-flex text-gray"><span class="mr-3"><span class="icon-envelope-o"></span></span> <a href="/cdn-cgi/l/email-protection" class="_cf_email_" data-cfemail="026b6c646d426f7b756760716b76672c616d6f">[email�&nbsp;protected]</a> </li>
</ul>
</div>
<div class="col-md-6">
<h3 class="text-danger h5 mb-3 "> <b>New York </b></h3>
<ul class="list-unstyled mb-5">
<li class="d-flex text-gray mb-2">
<span class="mr-3"><span class="icon-map"></span></span> 34 Street Name, City Name Here, United States
</li>
<li class="d-flex text-gray mb-2"><span class="mr-3"><span class="icon-phone"></span></span> +1 (222) 345 6789</li>
<li class="d-flex text-gray "><span class="mr-3"><span class="icon-envelope-o"></span></span> <a href="/cdn-cgi/l/email-protection" class="_cf_email_" data-cfemail="fb92959d94bb96828c9e9988928f9ed5989496">[email�&nbsp;protected]</a> </li>
</ul>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="box">
<h3 class="heading">Send us a message</h3>
<form class="mb-5" method="post" id="contactForm" name="contactForm">
<div class="row">
<div class="col-md-12 form-group">
<label for="name" class="col-form-label ">Name</label>
<input type="text" class="form-control" name="name" id="name">
</div>
</div>
<div class="row">
<div class="col-md-12 form-group">
<label for="email" class="col-form-label">Email</label>
<input type="text" class="form-control" name="email" id="email">
</div>
</div>
<div class="row mb-3">
<div class="col-md-12 form-group">
<label for="message" class="col-form-label">Message</label>
<textarea class="form-control" name="message" id="message" cols="30" rows="7"></textarea>
</div>
</div>
<div class="row">
<div class="col-md-12">
<input type="submit" value="Send Message" class="btn btn-block btn-primary rounded-0 py-2 px-4">
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

<!-- Existing script tag for your AJAX code -->
<script>
    $(document).ready(function () {
        $('#contactForm').submit(function (event) {
            event.preventDefault(); // Prevent the default form submission behavior

            // Get form data
            var formData = {
                'name': $('#name').val(),
                'email': $('#email').val(),
                'message': $('#message').val()
            };

            // Send AJAX request to your server-side script (logic.php)
            $.ajax({
                type: 'POST',
                url: 'contact_logic.php', // Replace with your server-side script
                data: formData,
                dataType: 'json',
                encode: true,
                success: function (response) {
                    // Handle success response
                    console.log(response);
                    $('#form-message-success').text('Your message was sent, thank you!').addClass('alert alert-success');
                },
                error: function (error) {
                    // Handle error response
                    console.error('Error:', error);
                    $('#form-message-warning').text('Error sending message. Please try again.').addClass('alert alert-danger');
                }
            });

            // Clear the input fields after form submission
            $('#name').val('');
            $('#email').val('');
            $('#message').val('');
        });
    });
</script>



<script data-cfasync="false" src="js/email-decode.min.js"></script><script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/main.js"></script>
<script defer="" src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" data-cf-beacon="{" rayid":"83f193e6bff90ead","b":1,"version":"2023.10.0","token":"cd0b4b3a733644fc843ef0b185f98241"}"="" crossorigin="anonymous"></script>

</div></body></html>
<?php
include('footer.php');
?>