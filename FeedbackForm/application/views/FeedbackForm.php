<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/main.css');?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style.css');?>">
    
    <title>Feedback Form</title>
</head>
<body>
    
    <div class="container">
    <h1>Feedback Form</h1>
    <div class="error"><?= $this->session->flashdata('Error'); ?></div>
            <form action='/FeedbackForm/login' method='post' id="vaccination_form">
                <!-- Input name here -->
                <label>Your Name (optional):</label>
                <input type='text' name='name' id='name'>
                <!-- course title -->
                <label>Course Title:</label>
                <select name="courseTitle" id="track">
                    <option value="">-- Course Track--</option>
                    <option value="PHP Track">PHP Track</option>
                    <option value="Web Fundamentals">Web Fundamentals</option>
                    <option value="JQuery Track">JQuery Track</option>
                </select>
                <!-- given score using for loop -->
                <label>Given Score (1-10):</label>
                <select name="score" id="score">
<?php           
                for($score = 1; $score <= 10; $score++)
                { 
?>
                    <option value="<?= $score ?>"><?= $score ?></option>
<?php               
                } 
?>
                </select>
                <!-- text area field for comment -->
                <label>Reason:</label>
                <textarea type='text' name='reason'></textarea>
                <!-- Submit button to redirect to the result.php -->
                <button type='submit' name='submit' value='submit'>Submit </button>
            </form>
    </div>
</body>
</html>