<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <title>BINGO</title>
    </head>
    <body>
        <div class="container">
                <?php
                    echo "<table class= bingocard>";
                    function bingo(){
                        $bingo = array("B","I","N","G","O");
                        for($b=0; $b < count($bingo); $b++){
                            echo "<th>$bingo[$b]</th>"; 
                        }
                        for($tbl_row = 2; $tbl_row <= 6; $tbl_row++){
                            if($tbl_row % 2 == 0) {
                                echo "<tr class=blue>";
                            } else {
                                echo "<tr class=red>";
                            }
                            for ($tbl_col = 1; $tbl_col <= 5; $tbl_col++){
                                $result = $tbl_row * $tbl_col;
                                echo"<td>$result</td>";
                            }
                            echo "</tr>";
                        }
                        echo "</table>";
                    }
                    bingo();
                ?>
        </div>
    </body>
</html>