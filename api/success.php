
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <title>Success</title> 

    <!-- CSS -->
    <?php $folder="root"; include_once('incs/stylesheets.inc.php'); ?>
</head>
<body>  

    <!-- Navbar -->
    <?php $folder="root"; include_once('incs/navbar.inc.php'); ?>

    <!-- Success Wrapper Start -->
    <div class="py-5 success__wrapper">
        <div class="container py-sm-5 py-lg-0">
            <div class="row g-0 justify-content-center align-items-center">
                <div class="col-lg-6 text-center">
                    <img src="images/success.gif" class="img-fluid w-auto" alt="image" style="max-height: 18rem;">
                    <?php if (isset($_GET['success']) && $_GET['success'] === 'start-project') { ?> 
                        <div class="text-center">
                            <h1 class="h2 fw-normal ff-body text-primary text-center">Your Project Start Request Form Submission Successfull!</h1> 
                            <p class="lea text-center ">
                                One of the Team Members will contact you to discuss the service options as quickly as possible. You can contact us on <a href="tel:+917012413338" class="link d-inline">+91 70124 13338</a>.
                            </p>
                        </div>
                    <?php } else if (isset($_GET['success']) && $_GET['success'] === 'contact-success') { ?>
                        <div class="text-center">
                            <h1 class="h3 ff-body text-primary text-center">Your Form Submission Successfull!</h1> 
                            <p class="lead-sm text-center fw-normal">
                                One of the Team Members will contact you to discuss the service options as quickly as possible.  You can contact us on <a href="tel:+917012413338" class="link d-inline">+91 70124 13338</a>.
                            </p>
                        </div>
                    <?php } else { ?> 
                        <h1 class="h3 ff-body text-primary text-center">Form Successfully Submited!</h1> 
                    <?php } ?> 
                </div>
            </div>
        </div><!--.//container-->
    </div>
    <!-- Success Wrapper End -->
    
    
     
    <!-- Footer -->
    <?php $folder="root"; include_once('incs/footer.inc.php'); ?>
</body>
</html>



