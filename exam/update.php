<?php
require_once("adminModel.php");
session_start();

if (isset($_POST["submit"])) {

    $id = $_POST["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $phone = $_POST["phone"];


    if (updateAdmin($id, $name, $email, $password, $phone)) {
        echo "Updated Successfully";
    } else {
        echo "Update Failed";
    }
}

