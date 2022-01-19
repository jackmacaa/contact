<?php
    if(filter_has_var(INPUT_POST, 'submit'))
    {
        echo 'submittedd';
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <a href="index.php" class="navbar-brand">My Website</a>
            </div>
        </div>
    </nav>
    <div class="container">
        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="form-group">
                <label for="name">Name
                    <input type="text" name="name" value="" class="form-control">
                </label>
            </div>
            <div class="form-group">
                <label for="email">Email
                    <input type="text" name="email" value="" class="form-control">
                </label>
            </div>
            <div class="form-group">
                <label for="message">Message
                    <input type="text" name="message" value="" class="form-control">
                </label>
            </div>
            <br>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>