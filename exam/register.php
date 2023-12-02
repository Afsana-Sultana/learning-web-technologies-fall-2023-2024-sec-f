<?php
require_once("AuthModel.php");

if(isset($_POST["submit"]))
{
    $name = $_POST["name"]; 
    $email = $_POST["email"];
    $password = $_POST["password"];
    $phone = $_POST["phone"];

    if($name == '' || $email == '' || $phone = '' || $password == '')
    {
        echo "Empty field! Fill all the fields!";
    }
    else
    {
        $user= register($name, $email, $password, $phone);
        if($user)
        {
            //setcookie('flag', 'true', time()+3000, '/');
            $_SESSION['flag'] = "true";
            header('location:/login.php');
        }
        else{
            echo "Signup failed!";
        }
    }
}
else{
    echo "invalid";
}




?>