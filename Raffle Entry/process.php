<?php
    session_start();
    require("new-connection.php");
    
    if(isset($_POST['action']) && $_POST['action'] == "submit") {

        $contact_num = $_POST['number'];
        
        if(empty($contact_num) || strlen($contact_num) != 11) {

            $_SESSION['errors'] = "Please fill-up correctly! and enter 11 digits numbers";
            header('Location: index.php');
            exit(0);

        }elseif ($contact_num[0] != 0 || $contact_num[1] != 9) {
            $_SESSION['errors'] = "Number start with 09";
            header('Location: index.php');
            exit(0);

        }  else {           
           
            $query = "INSERT INTO `contact` (`id`, `contacts`, `created_at`, `updated_at`) VALUES (NULL, '$contact_num', NOW(), NOW());";
            run_mysql_query($query);
            header('Location: success.php');  
            $_SESSION['success'] = $contact_num;
        }
    } 
    // if(isset($_POST['delete'])) {

    //     $query = "DELETE FROM contact WHERE `contact`.`id` = 118";
    //     run_mysql_query($query);
    //     $_SESSION['errors'] = "Delete number successfully";
    //     header('Location: success.php'); 
    // }

    if(isset($_POST['new_entry'])){
        session_destroy();
        unset($_POST['new_entry']);
        header('Location: index.php');
        exit(0);
    }
    
?>