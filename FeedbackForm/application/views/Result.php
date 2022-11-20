<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/main.css');?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style.css');?>">
    <title>Document</title>
</head>
<body>
    <div class='container_result'>
            <h1>Sumitted Entry</h1>
                <div class="success"><?= $this->session->flashdata('success');?></div>
            <section>
                <form action="/FeedbackForm/" method='POST' id="return">
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
</body>
</html>