<?php 
    session_start();
    require("new-connection.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Bulletin Board</title>
</head>
<body>
    <div class="container">
        <form action="process.php" method="POST">
            <h1>Bulletin Board Entry</h1>
<?php
    if(!empty($_SESSION['error_messages']))
    {
        foreach($_SESSION['error_messages'] as $message)
        {
?>          <h5><?= $message; ?></h5>
<?php          
        }
        unset($_SESSION['error_messages']);
    }
?>
            <div class="form">
                <label>Subjects: </label>
                <input type="text" name="subject" id="subj"/>
                <p><label>Details:  </label></p>
                <textarea name="details"></textarea>
                <input type="submit" name="action" value="ADD" id="add" />
                <input type="submit" name="action" value="SKIP" id="skip"/>
            </div>
        </form>
    </div>
</body>
</html>