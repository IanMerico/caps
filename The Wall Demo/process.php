<?php
    session_start();
    require('new-connection.php');

    if(isset($_POST['action']) && $_POST['action'] == 'create_message') {
        review($_POST);
    } elseif(isset($_POST['action']) && $_POST['action'] == 'create_reply') {
        reply($_POST);
    }
    if(isset($_POST['action']) && $_POST['action'] == 'register') {
        register_user($_POST);
    } elseif(isset($_POST['action']) && $_POST['action'] == 'login') {
        login_user($_POST);
    }
    else { //malicious navigation to process.php OR someone is trying to log off!
        session_destroy();
        header('location: index.php');
        die();
    }
    function register_user($post) //just a parameter called post
    {
        //------------------begin pf validation checks----------//
        $_SESSION['errors'] = array();

        if(empty($post['first_name']) || empty($post['last_name']) || empty($post['password'])) {
            $_SESSION['errors'][] = "Oops! Empty field cannot be blank!";
        }
        elseif (strlen($post['first_name']) && strlen($post['last_name']) < 2) {
            $_SESSION['errors'][] = "First and last names must be minimum 2 characters long";
        }
        elseif ($post['password'] !== $post['confirm_password']) {
            $_SESSION['errors'][] = "passwords must match!";
        }
        elseif (strlen($post['password']) > 8) {
            $_SESSION['errors'][] = "Password must be at least 8 characters long";
        }
        elseif (strlen($post['contact_number']) != 11) {
            $_SESSION['errors'][] = "Please use a valid contact number!";
        }
        elseif ($post['contact_number'][0] != 0 || $post['contact_number'][1] != 9) {
            $_SESSION['errors'][] = "Contact number start with 0-9";
        }
        for($i = 0; $i < strlen($post['first_name']); $i++) {
            if(is_numeric($post['first_name'][$i])){
                $_SESSION['errors'][] = "First name must only contain letters";
                break;
            }
        }
        for($i = 0; $i < strlen($post['last_name']); $i++) {
            if(is_numeric($post['last_name'][$i])){
                $_SESSION['errors'][] = "Last name must only contain letters";
                break;
            }
        }
        //------------------end of validation checks----------//
        if(count($_SESSION['errors']) > 0) {
            header('Location: index.php');
            die();
        }
        else
        { // now you need to insert the data into the database!
            $password = md5($post['password']);
            $query = "INSERT INTO users (first_name, last_name, password, contact_number, created_at, updated_at) 
                      VALUES ('{$post['first_name']}', '{$post['last_name']}', '{$password}', '{$post['contact_number']}',  
                     NOW(), NOW())";
            run_mysql_query($query);
            $_SESSION['success_message'] = "User successfully created!";
            header('Location: index.php');
        }   
    }   
    function login_user($post) //just a parameter called post
    {
            $password = md5($post['password']);
            $query = "SELECT * FROM users WHERE users.password ='{$password}'
                      AND users.contact_number = '{$post['contact_number']}'";
            $user = fetch_all($query);
            if(count($user) > 0) {
                // var_dump($user);
                $_SESSION['user_id'] = $user[0]['id'];
                $_SESSION['first_name'] = $user[0]['first_name'];
                $_SESSION['logged_in'] = TRUE;
                $_SESSION['success_message'] = "You're successfully sign in";
                header('Location: success.php');
            }
            else {
                $_SESSION['errors'][] = "Please check user password and contact number!";
                header('Location: index.php');
                // die();
            }  
    }
    function review($post) {
        $message = escape_this_string($_POST['message']);
        if(empty($message)){
            $_SESSION['errors'][] = "content area is empty";
            header('Location: success.php');
            die();
        }else{
            $query = "INSERT INTO reviews (user_id, content, created_at, updated_at) 
                      VALUES ({$_SESSION['user_id']}, '{$message}', NOW(), NOW())";
            run_mysql_query( $query);
            header('Location: success.php');        
        }
    }
    function reply($post) {
        $reply = escape_this_string($_POST['reply']);
        if(empty($reply)){
            $_SESSION['errors'][] = "comment area is empty";
            header('Location: success.php');
            die();
        }else{
            $query = "INSERT INTO replies (user_id, content, review_id, created_at, updated_at) 
                      VALUES ({$_SESSION['user_id']}, '{$reply}', '{$_POST['review_id']}', NOW(), NOW())";
            run_mysql_query( $query);
            header('Location: success.php');
           
        }
    }
    if(isset($_POST['action']) && $_POST['action'] == 'signout') {
        session_destroy();
        unset($_POST['action']);
        header('Location: success.php');
    }
?>