<?php 
    $to = 'aum4productions@gmail.com';  
    $from = $_POST['cEmailAddress']; 
    $fromName = $_POST['cfull_name']; 
    
    $subject = "Contact Request, from - ".$fromName;  
    
    $htmlContent = ' 
    <html> 
        <head> 
            <title>Contact Request</title> 
        </head> 
        <body> 
            <h1 style="font-size: 18px;">Contact Request</h1> 
            <table cellspacing="0" style="border: 2px solid #eee; width: 100%;text-align:left;"> 
                <tr> 
                    <th style="padding:8px 12px;font-size:13px;border-right:2px solid #eee;width:115px;">Full Name:</th>
                    <td style="padding:8px 12px;font-size:14px;"> '. $_POST['cfull_name'] .' </td> 
                </tr> 
                <tr style="background-color: #eee;"> 
                    <th style="padding:8px 12px;font-size:13px;border-right:2px solid #eee;width:115px;">Currently based:</th>
                    <td style="padding:8px 12px;font-size:14px;"> '. $_POST['cCurrently_based'] .' </td> 
                </tr> 
                <tr> 
                    <th style="padding:8px 12px;font-size:13px;border-right:2px solid #eee;width:115px;">Email:</th>
                    <td style="padding:8px 12px;font-size:14px;"> '. $_POST['cEmailAddress'] .' </td> 
                </tr> 
                <tr style="background-color: #eee;"> 
                    <th style="padding:8px 12px;font-size:13px;border-right:2px solid #eee;width:115px;">Phone:</th>
                    <td style="padding:8px 12px;font-size:14px;"> '. $_POST['cContactNumber'] .' </td> 
                </tr> 
                <tr> 
                    <th style="padding:8px 12px;font-size:13px;border-right:2px solid #eee;width:115px;">Message:</th>
                    <td style="padding:8px 12px;font-size:14px;"> '. $_POST['cMessage'] .' </td> 
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
    
    // Send email 
    if(mail($to, $subject, $htmlContent, $headers)){ 
        header("Location: success.php?success=contact-success");
        exit(); 
    }else{ 
        echo 'Email sending failed.'; 
    }

?>