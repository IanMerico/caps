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
        <title>Money Button Game</title>
    </head>
    <body>
        <div class="container">
<?php
        if (isset($_SESSION['errors']))
        {
            foreach($_SESSION['errors'] as $error)
            {   
                echo "<p id='err'>".$error. "</p>";         
            }
            unset($_SESSION['errors']);
        }
?>
            <form action='process.php' method='post'>
                <p><label>Date Today</label></p>
                <input type='text' name='date' placeholder="m/d/y">
                <p><label>First Name</label></p>
                <input type='text' name='first_name' placeholder="first name">
                <p><label>Last Name</label></p>
                <input type='text' name='last_name' placeholder="last name">
                <p><label>Email</label></p>
                <input type='text' name='email' placeholder="email">
                <p><label>Issue Title</label></p>
                <input type='text' name='issue_title' placeholder="issue title">
                <p><label>Issue Details</label></p>
                <p><textarea name="issue_details" id="txt_box"></textarea></p>
                <input type='hidden' name='action' value='submit'>
                <input type='submit' id="submitbtn" value='Submit'>
            </form>
        </div>
    </body>
</html>
