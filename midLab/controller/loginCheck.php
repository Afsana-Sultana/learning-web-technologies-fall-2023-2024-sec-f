<?php 
    require_once('../model/users.php');
    session_start();
    if(isset($_REQUEST['submit'])){
    $id = $_REQUEST['id'];
    $password = $_REQUEST['password'];

    if($username == "" || $password == "" ){
        echo "null credentials";

    }
    else{
        $user = login($id, $password);
        
         if ($user){
            if($user ['role']=='admin'){
              $id == $_SESSION['user']['id'];
              $password == $_SESSION['user']['password'];
            header('location: ../view/admin_home.html');}
            else if($user['role']=='user'){
              $_SESSION['id']= $user['id'];
              $_SESSION['password']= $user['passwword'];
            header('location: ../view/user_home.html');}

            }
            else{echo "invalid";}
    }
    
}      
?>