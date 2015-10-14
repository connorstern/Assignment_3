<?php

//Declare variables
//$errName="junk";
if(isset($_POST['submit'])){
   $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];
    $human=intval($_POST['human']);

   

    if(!$_POST['name']){
        $errName="Please enter your name";
    }
    
    if(!$_POST['email']){
        $errEmail="Please enter your email";
    }
    
    if(!$_POST['message']){
        $errMessage="Please enter your message";
    }
    
    if(!$_POST['human'] || $human != 5){

     $errHuman="Please enter your answer for 2 + 3"; 

}



    if(!$errName && !$errEmail && !$errMessage && !$errHuman){
        $from = "Demo Contact Form";
        $to = "CDS8@pct.edu";
        $subject = "Message from Demo Contact Form";
        $body = "From: $name\n
             Email: $email\n
             Message: $message";
        mail($to, $subject, $body, $from);
        $result = '<div class="alert alert-success">Thank you!  I will be in touch.</div>';
    }
    else {
        $result = '<div class="alert alert-danger">Sorry, there was an error sending your message.  Please try again later.</div>';
    }

}
?>