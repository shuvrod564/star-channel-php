<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <title>Start A Project | AUM Productions</title>
 
    <!-- CSS -->
    <?php $folder="root"; include_once('incs/stylesheets.inc.php'); ?>
</head>
<body>  

    <!-- Navbar -->
    <?php $folder="root"; include_once('incs/navbar.inc.php'); ?>

    <!-- Header Wrapper Start -->
    <div class="container-fluid full-width px-0 page__header mt-lg-3">
        <img src="images/global/start-a-project-page-header-banner-image.webp" class="img-fluid banner" alt="contact banner">
    </div>
    <!-- Header Wrapper End -->

    <!-- Detail Wrapper Start -->
    <section class="pt-4 pt-md-5 pb-sm-4 pb-md-5 contact__wrapper mb-5">
        <div class="container">
            
            <form action="_start-project-page-form-submit.php" method="post" id="startProjectForm">
                <div class="row g-3"> 
                    <div class="col-12">
                        <h1 class="h2 fw-semibold mb-md-4">You’re interested in</h1> 
                    </div> 
                    <div class="col-12 py-2 rounded" id="interestBox">
                        <div class="row g-3"> 
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="checkbox__wrapp p-3 p-md-4"> 
                                    <div class="form-check">
                                        <input type="checkbox" name="interestedIn[]" id="video_production" class="form-check-input interested" value="Video Production">
                                        <label for="video_production" class="form-check-label lead fw-semibold text-dark mb-0 ps-2">Video Production</label>
                                    </div>
                                </div>
                                <!-- <script>
                                    function checkBox() {
                                        var box = document.getElementById("video_production");
                                        if ( box.checked == true ) {
                                            document.getElementById("budgetValidationBox").classList.remove('d-none');
                                        } else {
                                            document.getElementById("budgetValidationBox").classList.add('d-none'); 
                                        }
                                    }
                                </script> -->
                            </div><!--.//col--> 
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="checkbox__wrapp p-3 p-md-4"> 
                                    <div class="form-check">
                                        <input type="checkbox" name="interestedIn[]" id="branding_design" class="form-check-input interested" value="Branding & Design">
                                        <label for="branding_design" class="form-check-label lead fw-semibold text-dark mb-0 ps-2">Branding & Design</label>
                                    </div>
                                </div>
                            </div><!--.//col--> 
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="checkbox__wrapp p-3 p-md-4"> 
                                    <div class="form-check">
                                        <input type="checkbox" name="interestedIn[]" id="influencer_marketing" class="form-check-input interested" value="Influencer Marketing">
                                        <label for="influencer_marketing" class="form-check-label lead fw-semibold text-dark mb-0 ps-2">Influencer Marketing</label>
                                    </div>
                                </div>
                            </div><!--.//col-->
                        </div><!--./row-->
                        <div class="pt-1 small text-danger error" id="interest-error"></div>
                    </div><!--.//col-->
                </div><!--.//row-->
 
                <div class="row g-4 mt-5">
                    <div class="col-12">
                        <h2 class="h2 fw-semibold mb-sm-4 text-black">Send Us A Message</h2> 
                    </div> 
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="form-group">
                            <label for="full_name" class="d-block fw-medium">Full Name <span class="text-danger">*</span></label>
                            <input type="text" name="full_name" id="full_name" class="form-control fw-medium">
                            <div class="small text-danger error pt-1" id="full_name_error"></div>
                        </div>
                    </div><!--.//col--> 
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="form-group">
                            <label for="email_address" class="d-block fw-medium">Email <span class="text-danger">*</span></label>
                            <input type="text" name="email_address" id="email_address" class="form-control fw-medium">
                            <div class="small text-danger error pt-1" id="email_address_error"></div>
                        </div>
                    </div><!--.//col-->
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="form-group">
                            <label for="phone_number" class="d-block fw-medium">Phone Number <span class="text-danger">*</span></label>
                            <input type="text" name="phone_number" id="phone_number" class="form-control fw-medium">
                            <div class="small text-danger error pt-1" id="phone_number_error"></div>
                        </div>
                    </div><!--.//col--> 
                    <div class="col-12">
                        <div class="form-group">
                            <label for="project_description" class="d-block fw-medium">Briefly describe your project here <span class="text-danger">*</span></label>
                            <input type="text" name="project_description" id="project_description" class="form-control fw-medium">
                            <div class="small text-danger error pt-1" id="project_description_error"></div>
                        </div>
                    </div><!--.//col--> 
                </div><!--.//row-->

                <div class="rounded py-2 mt-5  d-none" id="budgetValidationBox"> 
                    <div class="row g-3" id="budgetBox">
                        <div class="col-12">
                            <h3 class="h2 fw-semibold text-black">Select Your Budget:</h3> 
                            <p style="color: #808080;">*Budget effects the level of content, design, quality etc… Higher budget projects are featured on our projects page.</p>
                        </div><!--.//col-->
                        <div class="col-lg-6">
                            <div class="checkbox__wrapp p-3 p-md-4 position-relative"> 
                                <div class="form-check">
                                    <input type="checkbox" name="budget[]" id="below_100000" class="form-check-input budget_checkbox" value="Below 100,000">
                                    <label for="below_100000" class="form-check-label lead fw-semibold text-dark mb-0 ps-2">Below 100,000</label>
                                </div>
                                <div class="position-absolute top-50 translate-middle-y fs-6 fw-semibold text-dark mb-0 _badge">BASIC</div>
                            </div>
                        </div><!--.//col-->
                        <div class="col-lg-6">
                            <div class="checkbox__wrapp p-3 p-md-4 position-relative"> 
                                <div class="form-check">
                                    <input type="checkbox" name="budget[]" id="100000-500000" class="form-check-input budget_checkbox" value="100,000 - 500,000">
                                    <label for="100000-500000" class="form-check-label lead fw-semibold text-dark mb-0 ps-2">100,000 - 500,000</label>
                                </div>
                                <div class="position-absolute top-50 translate-middle-y fs-6 fw-semibold text-dark mb-0 _badge">INTERMEDIATE</div>
                            </div>
                        </div><!--.//col-->
                        <div class="col-lg-6">
                            <div class="checkbox__wrapp p-3 p-md-4 position-relative"> 
                                <div class="form-check">
                                    <input type="checkbox" name="budget[]" id="500000-1000000" class="form-check-input budget_checkbox" value="500,000 - 10,00,000">
                                    <label for="500000-1000000" class="form-check-label lead fw-semibold text-dark mb-0 ps-2">500,000 - 10,00,000</label>
                                </div>
                                <div class="position-absolute top-50 translate-middle-y fs-6 fw-semibold text-dark mb-0 _badge">PROFESSIONAL</div>
                            </div>
                        </div><!--.//col-->
                        <div class="col-lg-6">
                            <div class="checkbox__wrapp p-3 p-md-4 position-relative"> 
                                <div class="form-check">
                                    <input type="checkbox" name="budget[]" id="above-1000000" class="form-check-input budget_checkbox" value="Above - 10,00,000">
                                    <label for="above-1000000" class="form-check-label lead fw-semibold text-dark mb-0 ps-2">Above - 10,00,000</label>
                                </div> 
                            </div>
                        </div><!--.//col-->
                    </div><!--.//row-->
                    <div class="pt-1 small text-danger error ps-3 ps-lg-5" id="budgetValidationBox-error"></div>
                </div>

                <div class="form-group mt-4 mt-lg-5 text-center">
                    <button class="btn btn-dark px-5 text-uppercase project__submit__btn fw-semibold lead">submit</button>
                </div>
               
            </form><!--.//form-->
        </div><!--.//container-->
    </section>
    <!-- Detail Wrapper End -->
 
    <!-- Footer -->
    <?php $folder="root"; include_once('incs/footer.inc.php'); ?>

    <script>
        $("#startProjectForm").submit(function() {
            if (validateStartProjectForm()) { return true; }
            else { return false; }
        }); 
        function validateStartProjectForm() {
            var valid = true;	
            $(".form-control").css('border-color','');
            $(".error").html('');
            
            // Interest Checkbox validation
            if($(".interested:checkbox:checked").length == 0) { 
                $("#interestBox").css('border','1px solid #dc3545');
                $("#interestBox").css('background-color','rgba(220, 53, 69, 0.18)');
                $("#interest-error").html('Please select a interest.');
               
                valid = false;
            } else { 
                $("#interestBox").css('border','0');
                $("#interestBox").css('background-color','transparent');
                $("#interest-error").html('');
            }
            // User name validation
            if(!$("#full_name").val()) {
                $("#full_name_error").html("Name required");
                $("#full_name").css('border-color','#dc3545');
                valid = false;
            } else {
                $("#full_name_error").html("");
                $("#full_name").css('border-color','#099f1a');
            } 
            
            //  
            var phno = $.trim($('#phone_number').val());
            var che_phno = /^[0-9]{7,15}$/;
            if(!$("#phone_number").val()) {
                $("#phone_number_error").html("Phone number required");
                $("#phone_number").css('border-color','#dc3545');
                valid = false;
            } if (!che_phno.test(phno)) {
                $("#phone_number").css('border-color','#dc3545');
                $("#phone_number_error").html('Please enter valid phone no'); 
                valid = false;
            } else if (phno.length < 7 || phno.length > 15) {
                $("#phone_number").css('border-color','#dc3545');
                $("#phone_number_error").html('Phone no. must be greater than or equals to 10 and less than or equals to 15 digits!!');
                // $("#dash_phone_error").css("color", "#FC0000"); 
                valid = false;
            } else {
                $("#phone_number_error").html("");
                $("#phone_number").css('border-color','#099f1a');
            } 
            //  
            if(!$("#email_address").val()) {
                $("#email_address_error").html("Email is required");
                $("#email_address").css('border-color','#dc3545');
                valid = false;
            } else if(!$("#email_address").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
                $("#email_address_error").html("Invalid email");
                $("#email_address").css('border-color','#dc3545');
                valid = false;
            } else {
                $("#email_address_error").html("");
                $("#email_address").css('border-color','#099f1a');
            }  
            // User name validation
            if(!$("#project_description").val()) {
                $("#project_description_error").html("Project description required");
                $("#project_description").css('border-color','#dc3545');
                valid = false;
            } else {
                $("#project_description-error").html("");
                $("#project_description").css('border-color','#099f1a');
            } 
            return valid;
        }
 
        $(function() {
            $('#video_production').change(function() {
                if ($(this).is(':checked')) {
                    $("#budgetValidationBox").removeClass('d-none');  
                } else {
                    $("#budgetValidationBox").addClass('d-none');
                }
            });
        });

        
    </script>

</body>
</html> 


