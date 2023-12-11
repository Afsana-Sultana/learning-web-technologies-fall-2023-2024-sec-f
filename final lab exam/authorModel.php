<?php

function register_buyer($name,$email,$password,$phone)
{
    $role = "buyer";
    $con = connection();
    $sql1 = "INSERT INTO buyer(name,email,password,phone,role)
             VALUES('$name','$email','$password','$phone','$role')";

    $status1 = mysqli_query($con,$sql1);
    if($status1){
        return true;
    }
    else{
        return false;
    }
}   

function register_seller($name,$email,$password,$phone)
{
    $role = "seller";
    $con = connection();
    $sql1 = "INSERT INTO seller(name,email,password,phone,role)
             VALUES('$name','$email','$password','$phone','$role')";

    $status1 = mysqli_query($con,$sql1);
    if($status1){
        return true;
    }
    else{
        return false;
    }
}   
function register_admin($name,$email,$password,$phone)
{
    $role = "admin";
    $con = connection();
    $sql1 = "INSERT INTO admin(name,email,password,phone,role)
             VALUES('$name','$email','$password','$phone','$role')";

    $status1 = mysqli_query($con,$sql1);

    if($status1 ){
        return true;
    }
    else{
        return false;
    }
}

?>