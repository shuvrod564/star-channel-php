<?php 
   // data sent in header are in JSON format
   header('Content-Type: application/json'); 
 
    $userName  = $_POST['fname'];  
 
      // Mail Address Where email will be submit 
    //   $to = "diliptechpullers@gmail.com";  
    $to = "contact@applecare.qa";  
    $subject = "Enquery Form, name: ".$userName;
    $sendMessage = '';
    // Email Template
    $sendMessage = ' 
        <table width="100%" cellspacing="0" cellpadding="0" border="0">
            <tr>
                <td style="border:1px solid #d5d2d2;border-bottom:0;padding:5px 10px;font-size:12px;font-weight:600;" width="90">Full Name</td>
                <td style="border:1px solid #d5d2d2;border-bottom:0;padding:5px 10px;font-size:14px;border-left:0;" width="70%">' . $_POST['fname'].' '. $_POST['lname'] . '</td>
            </tr> 
            <tr>
                <td style="border:1px solid #d5d2d2;border-bottom:0;padding:5px 10px;font-size:12px;font-weight:600;" width="90">Email Address</td>
                <td style="border:1px solid #d5d2d2;border-bottom:0;padding:5px 10px;font-size:14px;border-left:0;" width="70%">' . $_POST['emailAddress'] . '</td>
            </tr>
            <tr>
                <td style="border:1px solid #d5d2d2;border-bottom:0;padding:5px 10px;font-size:12px;font-weight:600;" width="90">Phone Number</td>
                <td style="border:1px solid #d5d2d2;border-bottom:0;padding:5px 10px;font-size:14px;border-left:0;" width="70%">'. $_POST['contactNumber'] .'</td>
            </tr> 
            <tr>
                <td style="border:1px solid #d5d2d2;padding:5px 10px;font-size:12px;font-weight:600;" width="90">Issue Name</td>
                <td style="border:1px solid #d5d2d2;padding:5px 10px;font-size:14px;border-left:0;" width="70%">' . $_POST['message'] . '</td>
            </tr> 
        </table>
    ';
     
  
      $header = "From:"+$email+" \r\n";
      $header .= "MIME-Version: 1.0\r\n";
      $header .= "Content-type: text/html\r\n";
      // die($sendMessage);
      $retval = mail ($to,$subject,$sendMessage,$header);
      // message Notification
      if( $retval == true ) {
          echo json_encode(array(
          'response'=> 'true',
          'message' => 'Message sent successfully'
          ));  
      }else {
          echo json_encode(array(
              'response'=> 'false',
              'message' => 'Error sending message'
          ));
      } 
?>
 
 