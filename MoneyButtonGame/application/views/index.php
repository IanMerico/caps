<?php date_default_timezone_set('Asia/Hong_Kong');
      $date = date('Y/m/d g:i A');?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/main.css');?>">
        <title>Money Button Game</title>
    </head>
    <body>
        <div class="container">
            <!-- Content: Amount of money, the chance left and reset game -->
            <header>
                <h1>Your money:  <?= $_SESSION['Money']?> </h1>
                <h2>Your chance left: <?= $_SESSION['Chances']?></h2>
                <form action="http://localhost/MoneyButtonGame/" method="POST" class="resetbtn">
                    <input type="hidden" name="reset_game" value="reset_game" />
                    <input type="submit" id="reset" value="Reset Game"/>
                </form>
            </header>
            <!-- Content: Bet buttons Low risk, Moderate risk, High risk, Severe risk  -->
            <main> 
                <form action="./process" method="POST">
                    <h3>low Risk</h3>
                    <input type="hidden" name="risk" value="low" />
                    <input type="submit" value="Bet"/>
                    <h4>by -25 up to 100</h4>
                </form>
                <form action="./process" method="POST">
                    <h3>Moderate Risk</h3>
                    <input type="hidden" name="risk" value="moderate" />
                    <input type="submit" value="Bet"/>
                    <h4>by -100 up to 1000</h4>
                </form>
                <form action="./process" method="POST">
                    <h3>High Risk</h3>
                    <input type="hidden" name="risk" value="high" />
                    <input type="submit" value="Bet"/>
                    <h4>by -500 up to 2500</h4>
                </form>
                <form action="./process" method="POST">
                    <h3>Severe Risk</h3>
                    <input type="hidden" name="risk" value="severe" />
                    <input type="submit" value="Bet"/>
                    <h4>by -3000 up to 5000</h4>
                </form>
            </main>
            <!-- Content: Game host and the results  -->
            <section>
                <h3>Game Host:</h3>
                <div class="box">
                    <p>[ <?= $date ?> ] Welcome to Money Button Game, risk taker! All you need to do is to push buttons to try your luck. You have free 10 chances with initial money 500. Choose wisely and good luck.</p>
                    <?php
                foreach($_SESSION['display'] as $key => $msgs) {
?>                  <p class="<?= $msgs['color']?>">[ <?= $date ?> ]<?= $msgs['msg'] ?></p>
<?php           } ?>
<?php           if ($_SESSION['Chances'] == 0) { ?>
                    <p>GAME OVER!</p>               
<?php            } ?>
                </div>
            </section>
        </div>
    </body>
</html>