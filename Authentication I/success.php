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
    <title>success</title>
</head>
<body>
    <div class="container1">
<?php
        if(isset($_SESSION['success_message']))
        {
?>
        <p class='success'><?=$_SESSION['success_message']?></p>
<?php
                unset($_SESSION['success_message']);
        }   
?> 
        <form action="process.php" method="POST">
            <h1>Welcome</h1>
            <h3>Howdy! <?= $_SESSION['first_name'] ?> </h3>
            <input type="submit" name="action" value="LOG OFF!" id="bck"/>
        </form>   
    </div>
</body>
</html>