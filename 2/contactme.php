<?php

if(isset($_POST['submit'])){

    if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $me = "beautifulessonna@gmail.com";
        $headers = "From: " .$email;
        $body = "You have received a message from " .$name. ".\n\n" .$message;

        mail($me, $subject, $body, $headers);
        header("Location: index.html");
    }

}

?>