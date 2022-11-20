<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <title>Excel to HTML</title>
    </head>
    <body>
        <div class="container">
            <table >
                <thead>
                    <th>first_name</th>
                    <th>last_name</th>
                    <th>company_name</th>
                    <th>full address</th>
                    <th>phone1</th>
                    <th>phone2</th>
                    <th>email address</th>
                    <th>website</th>  
                </thead>
                <tbody>
<?php
        ini_set('auto_detect_line_endings',TRUE);
        $row = 0;
        if (($handle = fopen("CSV/us-500.csv", "r")) !== FALSE) {
            fgetcsv($handle); // skip the first line on csv file
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                $num = count($data);
                $row++;
?>             
                    <tr>
<?php
                for ($c=0; $c < $num; $c++) {
                    $firstname = $data[0];
                    $lastname = $data[1];
                    $company_name = $data[2];
                    $address = $data[3];
                    $city = $data[4];
                    $country = $data[5];
                    $state = $data[6];
                    $zip = $data[7];
                    $phone1 = $data[8];
                    $phone2  = $data[9];
                    $email = $data[10];
                    $web = $data[11];
                }
?>
<?php 
                if($row % 10 == 0) {
                     $grey = 'class=lightgrey';
                }
                else {
                    $grey = ' ';
                }
?>
                        <td <?= $grey ?>><?= $firstname ?></td>
                        <td <?= $grey ?>><?= $lastname ?></td>
                        <td <?= $grey ?>><?= $company_name ?></td>
                        <td <?= $grey ?>><?= $address ?><?= $city ?> <?= $country ?> <?= $state ?> <?= $zip ?></td>
                        <td <?= $grey ?>><?= $phone1 ?></td>
                        <td <?= $grey ?>><?= $phone2 ?></td>
                        <td <?= $grey ?>><?= $email ?></td>
                        <td <?= $grey ?>><?= $web ?></td>
                    </tr>              
<?php          
            }
            fclose($handle);
        }
?>
                </tbody>
            </table>
        </div>
    </body>
</html>


