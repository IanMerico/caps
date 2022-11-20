<?php
    session_start();
    require("new-connection.php");
    var_dump($_POST);
    $errors = array();
    $success = array();


    if(isset($_POST['action']) && $_POST['action'] == 'ADD') {

        // Check if there are errors 
        $subject = escape_this_string($_POST['subject']);
        $details = escape_this_string($_POST['details']);

        if(empty($details) || empty($subject)) {

             $errors[] = "Oops! Fill up all the empty field.";

         }elseif (strlen($subject) >= 50) {

            $errors[] = "Subject, contains maximum of 50 characters only";

         }elseif (strlen($details) >= 500) {

            $errors[] = "Details, contains maximum of 500 characters only";

         }

         if(!empty($errors)) {
             $_SESSION['error_messages'] = $errors;
             header('Location: index.php');
             
         }else {
        //    execute query and display on the main php
            $query = "INSERT INTO `bulletin` (`subject`,`details`, `created_at`, `updated_at`) VALUES ('$subject ','$details ', NOW(), NOW());";
            if(run_mysql_query($query)) {
                $success[] = "New entry successfully added!";
            }
            header('Location: main.php');  
            $_SESSION['success'] = $success;
            die();   

         }
    }
    // if skip btn click, it will direct to main.php
    if(isset($_POST['action']) && $_POST['action'] == 'SKIP') {

        header('Location: main.php');
        unset($_action['action']);
        session_destroy();

    }
    // if back btn click, the user will return to index.php
    if(isset($_POST['action']) && $_POST['action'] == 'BACK') {

        header('Location: index.php');
        session_destroy();
        unset($_POST['action']);

    }

    
?>