<?php
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $msg=$_POST['msg'];

        $to='bajramovicbenjamin91@gmail.com';
        $subject='Form submission';
        $message="Name: ".$name."\n"."Wrote the following: "."\n\n".$msg;
        $headers="From: ".$email;

        if(mail($to, $subject, $message, $headers)){
            echo "<h1>Sent Successfully! Thank you "." ".$name.", We will contact you shortly</h1>";
        }
        else{
            echo "Something went wrong";
        }
    }
