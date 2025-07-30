<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <title>Contact Us | AUM Productions</title>
 
    <!-- CSS -->
    <?php $folder="root"; include_once('incs/stylesheets.inc.php'); ?>
</head>
<body>  

    <!-- Navbar -->
    <?php $folder="root"; include_once('incs/navbar.inc.php'); ?>

    <!-- Header Wrapper Start -->
    <div class="container-fluid full-width px-0 page__header mt-lg-3">
        <img src="images/global/contact-page-header-banner-image.webp" class="img-fluid banner" alt="contact banner">
    </div>
    <!-- Header Wrapper End -->

    <!-- Detail Wrapper Start -->
    <section class="pt-4 pt-md-5 pb-sm-4 pb-md-5 contact__wrapper">
        <div class="container">
            <h1 class="h2 mb-4">Send Us A Message</h1>

            <form action="_contact-form-submit.php" method="post" id="quickContactForm" class="row g-4 g-md-5">
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <label for="cfull_name" class="d-block fw-medium">Full Name <span class="text-danger">*</span></label>
                        <input type="text" name="cfull_name" id="cfull_name" class="form-control">
                        <div class="small text-danger error pt-1" id="cfull_name_error"></div>
                    </div>
                </div><!--.//col--> 
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <label for="cCurrently_based" class="d-block fw-medium">Where are you currently based? <span class="text-danger">*</span></label>
                        <input type="text" name="cCurrently_based" id="cCurrently_based" class="form-control">
                        <div class="small text-danger error pt-1" id="cCurrently_based_error"></div>
                    </div>
                </div><!--.//col-->
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <label for="cEmailAddress" class="d-block fw-medium">Email <span class="text-danger">*</span></label>
                        <input type="text" name="cEmailAddress" id="cEmailAddress" class="form-control">
                        <div class="small text-danger error pt-1" id="cEmailAddress_error"></div>
                    </div>
                </div><!--.//col-->
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <label for="cContactNumber" class="d-block fw-medium">Phone Number <span class="text-danger">*</span></label>
                        <input type="text" name="cContactNumber" id="cContactNumber" class="form-control">
                        <div class="small text-danger error pt-1" id="cContactNumber_error"></div>
                    </div>
                </div><!--.//col--> 
                <div class="col-12">
                    <div class="form-group">
                        <label for="cMessage" class="d-block fw-medium">Message</label>
                        <input type="text" name="cMessage" id="cMessage" class="form-control">
                        <div class="small text-danger error pt-1" id="cMessage_error"></div>
                    </div>
                </div><!--.//col-->
                <div class="col-12">
                    <div class="form-group">
                        <button type="submit" class="btn btn-dark px-5 text-uppercase">submit <i class="arrow white"></i></button>
                    </div>
                </div><!--.//col-->
            </form><!--.//row-->
        </div><!--.//container-->
    </section>
    <!-- Detail Wrapper End -->

    <!-- Address Details Wrapper Start -->
    <section class="py-4 py-md-5 contact__wrapper">
        <div class="container">
            <div class="row g-3 g-xl-4 justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-6 d-flex">
                    <div class="card bg-light card-body d-block w-100 text-center round p-4 py-xl-5">
                        <figure class="icon d-flex justify-content-center align-items-center"> 
                            <img src="images/icons/pin-white.svg" class="img-fluid" alt="location">
                        </figure>
                        <h2 class="h4 mt-4 text-white text-uppercase ff-body fw-medium mb-3">Contact address</h2>
                        <p class="lead-sm text-white fw-normal mb-0">Room no: 40/807 Second Floor Empire Edifice Building, Near, Sahakarana Rd, Marottichuvadu, Edappally, Kochi, Kerala 682024</p>
                    </div>
                </div><!--.//col-->
                <div class="col-lg-4 col-md-6 col-sm-6 d-flex">
                    <div class="card card-body d-block w-100 text-center round p-4 py-xl-5">
                        <figure class="icon d-flex justify-content-center align-items-center"> 
                            <img src="images/icons/mail-white.svg" class="img-fluid large_logo" alt="location">
                        </figure>
                        <h2 class="h4 mt-4 text-white text-uppercase ff-body fw-medium mb-3">Email us</h2>
                        <a href="mailto:info@aumproduction.com" class="lead-sm text-white fw-normal mb-0">info@aumproduction.com</a>
                        <div>
                            <a href="mailto:aum4productions@gmail.com" class="lead-sm text-white fw-normal mb-0" style="white-space: pre-line;word-wrap: anywhere;">aum4productions@gmail.com</a> 
                        </div>
                    </div>
                </div><!--.//col-->
                <div class="col-lg-4 col-md-6 col-sm-6 d-flex">
                    <div class="card bg-light card-body d-block w-100 text-center round p-4 py-xl-5">
                        <figure class="icon d-flex justify-content-center align-items-center"> 
                            <img src="images/icons/call-outlined-white.svg" class="img-fluid large_logo" alt="location">
                        </figure>
                        <h2 class="h4 mt-4 text-white text-uppercase ff-body fw-medium mb-3">Let’s talk</h2>
                        <div class="mb-2">
                            <a href="tel:+917012413338" class="lead-sm text-white fw-normal mb-0 d-flex d-md-inline-flex justify-content-center align-items-center">
                                <img src="images/icons/call-white.svg" class="img-fluid small_logo me-2" alt="icon">
                                <span>+91 70124 13338</span>
                            </a>  
                        </div>
                        <a href="tel:+918714453954" class="lead-sm text-white fw-normal mb-0 d-flex d-md-inline-flex justify-content-center align-items-center">
                            <img src="images/icons/whatsapp.svg" class="img-fluid small_logo me-2" alt="icon">
                            <span>+91 87144 53954</span>
                        </a>
                    </div>
                </div><!--.//col-->
            </div><!--.//row-->
        </div><!--.//container-->
    </section>
    <!-- Address Details Wrapper End -->

    <!-- Map Wrapper Start -->
    <div class="container-fluid full-width px-0">
        <div class="map">
            <iframe class="w-100" style="height:600px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.9559875772475!2d76.31894791479439!3d10.020490792837133!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b080df9f2e350af%3A0xa9fedd47ee77c85c!2sAUM%20PRODUCTIONS!5e0!3m2!1sen!2sin!4v1625595225884!5m2!1sen!2sin;"></iframe>
        </div>
    </div>
    <!-- Map Wrapper End -->
 

    <!-- Footer -->
    <?php $folder="root"; include_once('incs/footer.inc.php'); ?>

    

</body>
</html> 