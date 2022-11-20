<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <title>Authentications l</title>
    </head>
    <body>
        <div class="container">
<?php
        if(isset($_SESSION['errors']))
        {
            foreach ($_SESSION['errors'] as $error)
            {
?>
                <p class='error'><?=$error?> </p>
<?php
            }
            unset($_SESSION['errors']);
        }
        if(isset($_SESSION['success_message']))
        {
?>
                <p class='success'><?=$_SESSION['success_message']?></p>
<?php
                unset($_SESSION['success_message']);
        }   
?>          
            <form action="process.php" method="POST">
                <h2>Register</h2>
                <input type="hidden" name="action" value="register">
                <p><label class="fname">First name: </label><input type="text" name="first_name"></p> 
                <p><label class="lname">Last name:</label><input type="text" name="last_name"></p> 
                <p><label class="num">Contact number:</label><input type="text" name="contact_number"></p> 
                <p><label class="pass">Password:</label><input type="password" name="password"></p> 
                <p><label class="cpass">Confirm Password:</label><input type="password" name="confirm_password"></p> 
                <input type="submit" value="Register" id="reg">
            </form>
            <form action="process.php" method="POST">
                <h2>Login</h2>
                <input type="hidden" name="action" value="login">
                <p><label class="num">Contact number:</label><input type="text" name="contact_number"></p> 
                <p><label class="pass">Password:</label><input type="password" name="password"></p> 
                <input type="submit" value="Loggin" id="log">
            </form>
        </div>
    </body>
</html>