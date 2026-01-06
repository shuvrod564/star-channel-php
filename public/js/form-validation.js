$("#quickContactForm").submit(function() {
    if (validatequickContactForm()) { return true; }
    else { return false; }
}); 
function validatequickContactForm() {
    var valid = true;	
    $(".form-control").css('border-color','');
    $(".error").html('');

    // User name validation
    if(!$("#cfull_name").val()) {
        $("#cfull_name_error").html("Name required");
        $("#cfull_name").css('border-color','#dc3545');
        valid = false;
    } else {
        $("#cfull_name_error").html("");
        $("#cfull_name").css('border-color','#099f1a');
    } 
    // User name validation
    if(!$("#cCurrently_based").val()) {
        $("#cCurrently_based_error").html("Location required");
        $("#cCurrently_based").css('border-color','#dc3545');
        valid = false;
    } else {
        $("#cCurrently_based_error").html("");
        $("#cCurrently_based").css('border-color','#099f1a');
    } 

    // User email validation
    if(!$("#cEmailAddress").val()) {
        $("#cEmailAddress_error").html("Email is required");
        $("#cEmailAddress").css('border-color','#dc3545');
        valid = false;
    } else if(!$("#cEmailAddress").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
        $("#cEmailAddress_error").html("Invalid email");
        $("#cEmailAddress").css('border-color','#dc3545');
        valid = false;
    } else {
        $("#cEmailAddress-error").html("");
        $("#cEmailAddress").css('border-color','#099f1a');
    }

    // User phone number validation
    var phno = $.trim($('#cContactNumber').val());
    var che_phno = /^[0-9]{7,15}$/;
    if(!$("#cContactNumber").val()) {
        $("#cContactNumber_error").html("Phone number required");
        $("#cContactNumber").css('border-color','#dc3545');
        valid = false;
    } if (!che_phno.test(phno)) {
        $("#cContactNumber").css("border-color", "#FC0000");
        $("#cContactNumber_error").html('Please enter valid phone no'); 
        valid = false;
    } else if (phno.length < 7 || phno.length > 15) {
        $("#cContactNumber").css("border-color", "#FC0000");
        $("#cContactNumber_error").html('Phone no. must be greater than or equals to 10 and less than or equals to 15 digits!!');
        // $("#dash_phone_error").css("color", "#FC0000"); 
        valid = false;
    } else {
        $("#cContactNumber_error").html("");
        $("#cContactNumber").css('border-color','#099f1a');
    }

    // message validation
    if(!$("#cMessage").val()) {
        $("#cMessage_error").html("Message is required");
        $("#cMessage").css('border-color','#dc3545');
        valid = false;
    } else {
        $("#cMessage_error").html("");
        $("#cMessage").css('border-color','#099f1a');
    } 
    return valid;
}


  