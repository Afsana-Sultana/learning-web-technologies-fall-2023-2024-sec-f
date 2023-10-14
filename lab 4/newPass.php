<html lang="en">
<head>
    <title>Login</title>
</head>
<body>
        <form method="post" action="login.php" enctype=""> 
            <fieldset>
                <legend>current password</legend>
            current Password: <input type="password" name="CurPassword" value="" /> <br>

            New Password: <input type="password" name="password" value="" /> <br>
            
            ReType-password: <input type="password" name="NewPassword" value="" /> <br>
                     <input type="submit" name="submit" value="submit" />
       <?php if($$password == $NewPassword){
           header('location: login.php');
        }
        else if($CurPassword == $NewPassword){
            echo "invalid";
        }
        ?>
            </fieldset>
        </form>
</body>
</html>