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
    <title>Count Down</title>
</head>
<body>
    <div class="container">
        <h1>Countdown before day ends!</h1>
        <div class="seconds">
            <h2><span><?= $time ?></span> seconds</h2>
            <p><?= $date ?></p>
        </div>
    </div>
</body>
</html>