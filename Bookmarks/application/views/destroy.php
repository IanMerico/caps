
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
    <title>BookMarks</title>
</head>
<body>
    <div class="container">
        <h1>Are you sure you want to delete?</h1>
        <h3><?= $result['folder']?> / <?= $result['name']?> /( <a href=""><?= $result['url']?></a> )</h3>
        <form action="/Bookmarks/" method ="POST">
                        <td>
                            <input type="hidden" name="btn" value='YES'>
                            <input type="hidden" name="btn" value="<?= $result['id'] ?>">
                            <input type="submit" name="btn" value='Yes I want to delete'>
                        </td>
                        <td>
                            <input type="hidden" name="btn" value="No">
                            <input type="submit" value="No">
                        </td>
                        
        </form>
    </div>