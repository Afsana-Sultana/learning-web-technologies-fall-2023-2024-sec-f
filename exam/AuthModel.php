<?php
require ("db.php");
function register($name,$email,$password,$phone)
{
    $con = connection();
    $sql1 = "INSERT INTO admin(name,email,password,phone)
             VALUES('$name','$email','$password','$phone')";

    $status1 = mysqli_query($con,$sql1);

    if($status1 ){
        return true;
    }
    else{
        return false;
    }
}

function delete($name,$email,$password,$phone)
{
    $con = connection();
    $sql1 = "DELETE FROM admin(name,email,password,phone)
             VALUES('$name','$email','$password','$phone')";

    $status1 = mysqli_query($con,$sql1);

    if($status1 ){
        return true;
    }
    else{
        return false;
    }
}
?>