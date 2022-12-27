<?php

require_once('connection.php');

if(isset($_POST["submit"])){
    if(isset($_POST["type"])){
        $type = $_POST["type"];
        if($type=="contact_form"){
            $name = mysqli_real_escape_string($con,$_POST["name"]);
            $email = mysqli_real_escape_string($con,$_POST["email"]);
            $message = mysqli_real_escape_string($con,$_POST["message"]);

            $result = mysqli_query($con,"INSERT INTO `contact_form`(`name`, `email`, `message`) VALUES ('$name','$email','$message')");
            if($result){
                echo "Form Submitted";
            }else{
                echo "Form Submission failed";
            }
            header('Location: http://localhost/Websites/6.HowToMakeAResponsiveConstructionWebsite/');
        }

    }
}

?>