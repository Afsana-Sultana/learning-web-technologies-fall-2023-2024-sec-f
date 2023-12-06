
<?php 
    session_start();
    include 'db.php';
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];

    if($name == "" || $password == "" || $email == "" ){
        echo "null username or password or email!";
    }
     else {

        $user = ['name'=> $name, 'password'=> $password, 'email'=>$email];
        $_SESSION['user'] = $user;
        $sql2= "SELECT * from registration where name = '$name'";
        $result=mysqli_query($con,$sql2);
        if($num>0){
            echo "user exists"}
            else{
                $con = connection();
                $sql1 = "INSERT INTO registration(name,email,password)
                     VALUES('$name','$email','$password')";
        
                $status1 = mysqli_query($con,$sql1);
                header('location: login.php');
            }
            if($status1 ){
                return true;
            }            
            else {return false;}
    
?>