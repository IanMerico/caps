<?php
    require('new-connection.php');
    session_start();
    if(!isset($_SESSION['logged_in'])) {
        session_destroy();
        header('Location:index.php');
        die();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/success-style.css">
    <title>success</title>
</head>
    <body>
        <div class="container1">
            <header>
                <ul>
                    <li>BLOG</li>
                    <li class="left_side">Welcome!</li> 
                    <li class="left_side"><?= $_SESSION['first_name'] ?></li>
                    <li class="left_side">
                        <form action="process.php" method="POST">
                            <input type="hidden" name="action" value="signout" />
                            <input type="submit" value="Sign Out" id="bck"/>
                        </form>
                    </li>
                </ul>
            </header> 
<?php
            if(isset($_SESSION['errors']))
            {
                foreach ($_SESSION['errors'] as $error)
                {
?>
            <p class='error'><?=$error?> </p>
<?php
                }
                unset($_SESSION['errors']);
            }
?>
<?php
            if(isset($_SESSION['success_message']))
            {
?>
            <p class='success'><?=$_SESSION['success_message']?></p>
<?php
                unset($_SESSION['success_message']);
            }   
?>
            <main>
                <h1>Title</h1>
                <p class="content">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Nulla eveniet, perspiciatis itaque esse voluptatum magni nam aliquid sunt voluptatibus omnis, 
                    tenetur quia recusandae, harum et dicta eos minima quis! Autem numquam accusantium dignissimos 
                    iusto aspernatur recusandae quaerat. Veritatis animi quos fugiat omnis maxime consectetur, voluptate 
                    tempora adipisci consequatur rerum sequi.</p>
                <p class="content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat eius hic velit vel, nesciunt veniam 
                    praesentium possimus? Quia ratione optio dolores in distinctio ipsum illo doloremque ipsa nobis labore 
                    consectetur minus amet corrupti odio cupiditate doloribus nulla obcaecati mollitia quis officiis, itaque 
                    dolore? Non, fugiat ducimus? Officiis enim aut corrupti!</p>
            </main> 
            <section>
                <h2>Leave a Review</h2>
                <form action="process.php" method="POST">
                    <input type="hidden" name="action" value="create_message" />
                    <textarea name="message" placeholder="Post a Review" ></textarea>
                    <input type="submit" value="Create a review"/>
                </form>
<?php 
                $review = fetch_all("SELECT reviews.*, users.first_name, users.last_name 
                                    FROM reviews LEFT JOIN users ON users.id = reviews.user_id 
                                    ORDER BY id DESC");
                foreach($review as $reviews) { 
?>
                <h2><?= $reviews['first_name']?> <?= $reviews['last_name']?> (<?= $reviews['created_at']?>)</h2>
                <p><?= $reviews['content']?></p>
<?php
                $replies = fetch_all("SELECT replies.*, users.first_name, users.last_name 
                                    FROM replies LEFT JOIN users ON users.id = replies.user_id
                                    WHERE replies.review_id = {$reviews['id']};");
                foreach($replies as $reply) {
{?>

                    <h3><?= $reply['first_name']?> <?= $reply['last_name']?> (<?= $reply['created_at']?>)</h3>
                    <p><?= $reply['content']?></p>
<?php }
                 }?>
                <form class="reply_form"action="process.php" method="POST">
                    <input type="hidden" name="action" value="create_reply" />
                    <input type="hidden" name="review_id" value="<?= $reviews['id']?>" />
                    <textarea name="reply" placeholder="Post a reply"></textarea>
                    <input type="submit" value="Reply"/>
                </form>
<?php } ?>
            </section>
        </div>
    </body>
</html>