<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/styles.css">
        <title>Credit Card</title>
    </head>
    <body>
        <div class="container">
            <?php 
                $users = array( array('cardholder_name'=> "Michael Choi",   'cvc' => 123, 'acc_num' => '1234 5678 9876 5432'),
                                array('cardholder_name'=> "John Supsupin",  'cvc' => 789, 'acc_num' => '0001 1200 1500 1510'),
                                array('cardholder_name'=> "KB Tonel",       'cvc' => 567, 'acc_num' => '4568 456 123 5214'),
                                array('cardholder_name'=> "Mark Guillen",   'cvc' => 345, 'acc_num' => '123 123 123 123'),
                                array('cardholder_name'=> "Sebastian Gil",  'cvc' => 286, 'acc_num' => '5426 4512 4785 1535'),
                                array('cardholder_name'=> "Allysa Gomez",   'cvc' => 478, 'acc_num' => '4582 6598 7845 1254'),
                                array('cardholder_name'=> "Joseph Cruz",    'cvc' => 501, 'acc_num' => '0451 451 125 7845'),
                                array('cardholder_name'=> "Antonio Demata", 'cvc' => 600, 'acc_num' => '365 478 541 789'),
                                array('cardholder_name'=> "Susan Marquez",  'cvc' => 784, 'acc_num' => '4512 455 145 4512'));
                ?>
            <table>
                <tr>
                    <?php 
                        $title_head = array("ID","Name","Name in uppercase","Account Num","CVC Num","Full account","Length of full account","Is valid");
                        for($a=0; $a < count($title_head); $a++) {?>      
                            <th> <?=$title_head[$a]?> </th>                
                    <?php } ?>
                </tr>
                <?php foreach($users as $keys => $cc_info) { 
                        $keys++; 
                        if($keys % 3 == 0){
                                $grey = 'lightgrey';
                        } else {
                                $grey = ' ';
                        }?>
                <tr class='<?= $grey ?>'>
                    <td><?= $keys ?></td>
                    <td><?= $cc_info['cardholder_name'] ?></td>
                    <td><?= strtoupper($cc_info['cardholder_name']) ?></td>
                    <td><?= $cc_info['acc_num'] ?></td>
                    <td><?= $cc_info['cvc'] ?></td>
                    <td><?= $cc_info['acc_num'].' '.$cc_info['cvc'] ?></td>
                    <td><?= strlen($cc_info['acc_num']) ?></td>
                    <?php if(strlen($cc_info['acc_num']) == 19){
                                $a = 'yes';
                            } else {
                                $a = 'no';
                            }?>
                    <td><?= $a ?></td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </body>
</html>