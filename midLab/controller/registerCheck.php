<?php
      session_start();
      //$username= 0;
    
      $id= $_REQUEST['id'];
      $password= $_REQUEST['password'];
      $rePassword= $_REQUEST['rePassword'];
      $name = $_REQUEST['name'];
      $userType= $_REQUEST['userType'];
      
      if($username == "" || $password == ""){
        echo "imcomplete input";
      }
      elseif($username == $password){
        echo "invalid input";
      }
      
      else{ 
        $user = ['id'=> $id, 'password'=> $password, 'Password' => $rePassword, 'name '=> $name, 'userType'=>$userType,];
        $_SESSION['user'] = $user;
        header('location: ../view/login.php');
      }
      
  ?>
