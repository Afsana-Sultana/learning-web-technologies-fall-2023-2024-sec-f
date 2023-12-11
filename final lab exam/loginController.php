<?php 
require_once("authorModel.php");
session_start();

if(isset($_POST["submit"])){
    $email = $_POST['email'];
    $password = $_POST['password']; 

    if($email == '' || $password == ''){
        
        echo "Please provide email & password";
    }

    else{
        $user = login($email,$password);
        if($user)
        {
            if($user["role"] == "doctor")
            {
                $_SESSION['id'] = $user['id'];
                $_SESSION['name'] = $user['name'];
                $_SESSION['email'] = $user['email'];
                header("location: home.php");
            }
            else if($user["role"] == "customer")
            {
                $_SESSION['id'] = $user['id'];
                $_SESSION['name'] = $user['name'];
                $_SESSION['email'] = $user['email'];
                header("location: home.php");
            }
            else if($user["role"] == "admin")
            {
                $_SESSION['id'] = $user['id'];
                $_SESSION['name'] = $user['name'];
                $_SESSION['email'] = $user['email'];
                header("location: home.php");
            }
            else{
                echo "Exception Operation";
            }
        }
        else{
            echo "email or password do not exist!";
        }
    
    }



}
else{
    echo("Invalid Entry");
}

?>