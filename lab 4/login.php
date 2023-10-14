<?php
if(isset($_REQUEST['submit'])){
    $username = $_REQUEST['$username'];
    $password = $_REQUEST['$password'];

    if($username == " "  || $password == ""){
        echo "invalid input";
    }
    else if($username == $password ){
        echo "invalid input";
    }

   else{
    $username = htmlspecialchars($username);
    if("/^[a-zA-Z0-9 _-.]+$/"== $username && $username >2 && $password >8 && $password == "@"| "$"|"#" ){
       header('location: homepage.html');
    }
    }
    if ($password <= 8){
        echo "pass should be 8 digit long";
    }
    
}    


?>
<html lang="en">
<head>
    <title>Login</title>
</head>
<body>
        <form method="post" action="logincheck.php" enctype=""> 
            <fieldset>
                <legend>LOGIN</legend>
            User Name: <input type="text" name="username" value="" /> <br>
            Password: <input type="password" name="password" value="" /> <br>
            <hr>
            Remember me <input type="checkbox" name="rememberMe" value="" /> <br>
                     <input type="submit" name="submit" value="submit" />
                     <a href="forgotPassword.html"> Forgot Password?</a>
            </fieldset>
        </form>
</body>
</html>