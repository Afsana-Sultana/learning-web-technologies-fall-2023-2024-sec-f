<?php
require_once("AuthorModel.php");

if(isset($_POST["submit"]))
{
    $name = $_POST["name"]; 
    $email = $_POST["email"];
    $password = $_POST["password"];
    $phone = $_POST["phone"];

    if($name == '' || $email == '' || $phone = '' || $password == '')
    {
        echo "Empty field!";
    }
    else
    {
        $user= register_seller($name, $email, $password, $phone);
        if($user)
        {
            header('location:login.php');
        }
        else{
            echo "Signup failed!";
        }
    }
}
else{
    echo "Invalid" ;
}
?>