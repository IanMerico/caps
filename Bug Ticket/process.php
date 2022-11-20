<?php
    session_start();

        $errors = array();  
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $date = $_POST['date'];
        $issue_title = $_POST['issue_title'];
        $issue_details = $_POST['issue_details'];

        $today = explode("/",$date);
        $day   =  $today[0];
        $month =  $today[1];
        $year  =  $today[2];

    if(isset($_POST['action']) && $_POST['action'] == "submit") {

        if (empty($date && $first_name && $last_name && $email && $issue_title && $issue_details)){
            $errors[] = "Empty field cannot be blank";
        } elseif (!checkdate($month, $day, $year)) {
            $errors[] = "Invalid date format";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Invalid email format";
        }
        if(is_numeric($first_name)) {
            $errors[] = "first name  should not have any numbers.";
        }
        if(is_numeric($last_name)) {
            $errors[] = "last name should not have any numbers.";
        }
        
        if(strlen($issue_title) > 50) {
            $errors[] = "The issue title should not be more than 50 characters.";
        }
        if(strlen($issue_details) > 250) {
            $errors[] = "Issue details should not be more than 250 characters.";
        } 

        if (count($errors) > 0 ) {
            $_SESSION['errors'] = $errors;
            header('Location: index.php');

            
        } else {
            $_SESSION['success'] ="Welcome";
            header('Location: home.php');
            unset($_SESSION['errors']);
        }
    }

?>