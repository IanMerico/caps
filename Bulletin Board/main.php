<?php 
    session_start();
    require("new-connection.php");
    $view = bulletinview();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/main-style.css">
    <title>main</title>
</head>
<body>
    <div class="container">
        <h1>Bulletin Board View</h1>
<?php
            if(!empty($_SESSION['success'])) // message success
            {
                foreach($_SESSION['success'] as $sucesss)
                {
?>      <h5><?= $sucesss; ?></h5>
<?php          
                }
                unset($_SESSION['success']);
            }
?> 
        <form action="process.php" method="POST">
            <input type="submit" name="action" value="BACK" id="bck"/>
        </form> 
        <section>     
            <div class="box">
<?php       foreach($view as $row) {?> 
                <h3><?= $row['bulletin_updated']?>&nbsp;-&nbsp;<?= $row['subject']?></h3>
                <p><?= $row['details']?></p>         
<?php       } ?>
            </div>
        </section>
    </div>
</body>
</html>