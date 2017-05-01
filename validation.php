<?php

    $error = "";
    $successMessage = "";

    if($_POST){
        
        
        if(!$_POST["email"]) {
            
            $error .= "An email address is required.<br>";
            
        }
        if(!$_POST["name"]) {
            
            $error .= "Enter your name or company.<br>";
            
        }
        if(!$_POST["message"]) {
            
            $error .= "Tell me about your project.<br>";
            
        }
        
        //VALIDATE EMAIL
        if ($_POST['
        email'] && filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            $error .= "The email address is invalid.<br>";
        }
        
        if ($error != "") {
            
            $error = '<div class="alert alert-warning" role="alert"><p><strong>'.$error.'</strong></p></div>';
            
        } else {
            //SET EMAIL VARIABLES
            $emailTo = "sergiordz7@gmail.com";
            $subject = $_POST['name'];
            $message = $_POST['message'];
            $headers = "From: ".$_POST['email']; 
            
            //SEND EMAIL FUNCTION
            if(mail($emailTo, $subject, $message, $headers)) {
                //DISPLAY SUCCES MESSAGE
                $successMessage = '<div class="alert alert-success" role="alert"><p><strong>Your message was sent. I will get back to you as soon as I can.</strong></p></div>';
            } else {
                //DISPLAY ERROR MASSAGE IF EMAIL FAILS
                $error = '<div class="alert alert-danger" role="alert"><p><strong>Your message was not sent, please try again later.</strong></p></div>';
            }
            
        }
    }
    

?>