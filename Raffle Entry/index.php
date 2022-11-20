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
    <title>Raffle Entry</title>
</head>
<body>
    <div class="container">
<?php   
        if(isset($_SESSION['errors'])) {
            echo $_SESSION['errors'];
            unset($_SESSION['errors']); 
        }
?>
        <form action="process.php" method="POST" class="processraffle">
            <h1>Welcome to Raffle Entry!</h1>
            <p><label>Enter a valid number</label></p>
            <input type="text" name="number" />
            <input type="hidden" name="action" value="submit" />
            <input type="submit" value="Submit" />
        </form>
    </div>
</body>
</html>