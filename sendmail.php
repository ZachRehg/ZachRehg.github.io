<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(
        !empty($_POST['firstname'])
	&& !empty($_POST['lastname'])
        && !empty($_POST['email'])
        && !empty($_POST['message'])
    ){
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $email = $_POST["email"];
        $message = $_POST["message"];


        $to = "zachrehg@gmail.com";
        $subject = "New Contact Form Submission";
        $body = "Name: {$firstname} {$lastname}\nEmail: {$email}\nMessage: {$message}";
        $headers = "From: {$email}";


        if (mail($to, $subject, $body, $headers)) {
            echo "Message sent successfully!";
        } else {
            echo "Failed to send message.";
        }
    }
}

?>
