<?php
    session_start();
    include('includes/header.php')
?>
<div class="container">
            <h1>Feedback Form</h1>
            <form action='result.php' method='post' id="vaccination_form">
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
<?php
    include('includes/footer.php')
?>
