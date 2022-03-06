<?php
include("./connect.php");
    $name = $_POST['name'];
    $email = $_POST['email'];
    $sub = $_POST['sub'];
    $msg = $_POST['msg'];
    if(!empty($name) && !empty($email) && !empty($sub) && !empty($msg)){
        $sql = mysqli_query($db,"INSERT INTO contact(name, email, subject, msg) VALUES ('$name','$email','$sub','$msg')");
        if($sql){
            echo "Success";
        }
        else{
            echo "Something went wrong try again.";
        }
    }
    else{
        echo "All values are required";
    }