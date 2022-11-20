<?php
    include('includes/header.php');

    if(isset($_POST['submit'])) {
        $name  = $_POST['name'];
        $courseTitle  = $_POST['courseTitle'];
        $score  = $_POST['score'];
        $reason  = $_POST['reason'];
    }
?>
<div class='container_result'>
            <h1>Sumitted Entry</h1>
            <section>
                <form action="index.php" method='POST' id="return">
                    <label>Your Name (optional):</label>
                    <input class='result' type='text' value='<?= $name ?>' disabled>

                    <label>Course Title:</label>       
                    <input class='result' type='text' value='<?= $courseTitle ?>' disabled>

                    <label>Given Score (1-10):</label>   
                    <input class='result' type='text' value='<?= $score ?>' disabled>
                    
                    <label>Reason:</label>
                    <textarea class='text_entry' disabled><?= $reason ?></textarea>
                    <button type='submit' name='return' value='submit'>Return </button>
                </form>
            </section>  
        </div>
<?php
    include('includes/footer.php')
?>
