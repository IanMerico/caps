<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>count</title>
</head>
<body>
    <p>You visited that page <?= $counter; ?> times</p>
    <form action="reset" method="post">
            <input type="hidden" name="action"value="reset">
            <input type="submit" value="Reset">
    </form>
</body>
</html>