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
    <title>Raffle Draw</title>
</head>
<body>
    <div class="container">
        <P>There are <span><?= $result ?></span> lucky winners selected</P>
        <div id="draw">
            <h1><span><?= $random ?></span></h1>
            <form action="Draw">
                <input type="submit">
            </form>
            <form action="/RaffleDraw/Draw/reset" >
                <input type="submit" value="Reset" id="rst">
            </form>    
        </div>
    </div>
</body>
</html>