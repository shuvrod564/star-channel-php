<?php 
    $to = 'aum4productions@gmail.com'; 
    $from = $_POST['email_address']; 
    $fromName = $_POST['full_name']; 
    
    $subject = "Start a project, requested by - ".$fromName; 

    $interestedIn = implode(", &nbsp;",$_POST['interestedIn']);
    $budget = implode(", &nbsp;",$_POST['budget']);
    
    $htmlContent = ' 
        <html> 
        <head> 
            <title>Start a project.</title> 
        </head> 
        <body> 
            <h1 style="font-size: 18px;">Project Start Details</h1> 
            <table cellspacing="0" style="border: 2px solid #eee; width: 100%;text-align:left;"> 
                <tr> 
                    <th style="padding:8px 12px;font-size:13px;border-right:2px solid #eee;width:140px;">Interested in:</th>
                    <td style="padding:8px 12px;font-size:14px;"> '. $interestedIn .' </td> 
                </tr> 
                <tr style="background-color: #e0e0e0;"> 
                    <th style="padding:8px 12px;font-size:13px;border-right:2px solid #eee;width:140px;">Full Name:</th>
                    <td style="padding:8px 12px;font-size:14px;"> '. $_POST['full_name'] .' </td> 
                </tr> 
                <tr> 
                    <th style="padding:8px 12px;font-size:13px;border-right:2px solid #eee;width:140px;">Email:</th>
                    <td style="padding:8px 12px;font-size:14px;"> '. $_POST['email_address'] .' </td> 
                </tr> 
                <tr style="background-color: #e0e0e0;"> 
                    <th style="padding:8px 12px;font-size:13px;border-right:2px solid #eee;width:140px;">Phone:</th>
                    <td style="padding:8px 12px;font-size:14px;"> '. $_POST['phone_number'] .' </td> 
                </tr> 
                <tr> 
                    <th style="padding:8px 12px;font-size:13px;border-right:2px solid #eee;width:140px;">Project description:</th>
                    <td style="padding:8px 12px;font-size:14px;"> '. $_POST['project_description'] .' </td> 
                </tr> 
                <tr style="background-color: #e0e0e0;"> 
                    <th style="padding:8px 12px;font-size:13px;border-right:2px solid #eee;width:140px;">Budget:</th>
                    <td style="padding:8px 12px;font-size:14px;"> '. $budget .' </td> 
                </tr> 
            </table> 
        </body> 
        </html>'; 
    
    // Set content-type header for sending HTML email 
    $headers = "MIME-Version: 1.0" . "\r\n"; 
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
    
    // Additional headers 
    $headers .= 'From: '.$fromName.'<'.$from.'>' . "\r\n";  
    $headers .= 'Cc: aum4productions@gmail.com' . "\r\n"; 
    $headers .= 'Bcc: aum4productions@gmail.com' . "\r\n"; 
    $headers .= "X-Priority: 3\r\n";
    $headers .= "X-Mailer: PHP". phpversion() ."\r\n" ;
    
    // Send email 
    if(mail($to, $subject, $htmlContent, $headers)){ 
        header("Location: success.php?success=start-project");
        exit();  
    }else{ 
    echo 'Email sending failed.'; 
    }

?>