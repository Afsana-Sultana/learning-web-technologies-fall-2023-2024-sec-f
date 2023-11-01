<?php

    require_once('db.php');

    function login($username, $password){
        $con = getConnection();
        $sql = "SELECT * from users where username='{$username}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        
        if(count($user) > 0){
            return true;
        }else{
            return false;
        }
    }

    function signup(){
        $con = getConnection();
        $sql = "INSERT INTO users where id='{$id}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        
        if(count($user) > 0){
            return true;
        }else{
            return false;
        }
    }

    function getUser($id){

    }

    function deleteUser(){
        $con = getConnection();
        $sql = "DELETE FROM  users where id='{$id}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        
        if(count($user) > 0){
            return true;
        }else{
            return false;
        }
    }

    function updateUser(){
        $con = getConnection();
        $sql = "UPDATE from users where id='{$id}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        
        if(count($user) > 0){
            return true;
        }else{
            return false;
        }
    }


?>