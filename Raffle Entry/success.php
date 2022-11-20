<?php 
    session_start();
    require("new-connection.php");
    $result = display();
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Success</title>
</head>
<body>
    <div class="container">
        <h1 id="success_h1">Success! Contact number <?= $_SESSION['success'];?> is now added. </h1>
        <table>
            <tr>
                <th>Contact Number</th>
                <th>Date Inserted</th>
            </tr>
            <tr>
<?php       foreach($result as $row) {?>
                <td><?= $row['contacts']?></td>
                <td><?= $row['updated_date']?></td>
                <!-- <td>
                <form action="process.php" method="POST">
                    <input type="hidden" name="action" value="<?= $row['id'];?>" />
                    <input type="submit" name="delete" value="Delete" />
                </form>
                </td> -->
            </tr>
<?php       } ?>
        </table>
        <form action="index.php" method="POST" class="form_success">
            <input type="submit" value="Add New Entry" />
        </form>
    </div>
</body>
</html>