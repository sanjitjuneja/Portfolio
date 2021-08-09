<?php
    $name = $GET['name'];
    $email = $GET['email'];
    $message = $GET['message'];

    if (!empty($email) && !empty($message) && !empty($name)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $receiver = 'sanjit.j55@gmail.com';
            $subject = "New Portfolio Contact Submission From $name <$email>";
            $body = "User Name: $name.\n".
                    "User Email Address: $email.\n".
                    "User Message: $message.\n"; 
            $sender = "From: $email";
            echo "Sending email now...";
            if (mail($receiver, $subject, $body, $sender)) {
                echo "Your message has been sent!";
            } else {
                echo "Sorry, failed to send your message!";
            }
        } else {
            echo "Enter a valid email address!";
        }
    } else {
        echo "Name, email, and message fields are required!";
    }
?>