<?php require_once "validate.php" ?>

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
        <?php if($msg != "") : ?>
            <div class="alert <?= $msgClass; ?>"><?= $msg; ?></div>
        <?php endif; ?>
        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="form-group">
                <label for="name">Name
                    <input type="text" name="name" value="<?= isset($_POST['name']) ? $name : ''; ?>" class="form-control">
                </label>
            </div>
            <div class="form-group">
                <label for="email">Email
                    <input type="text" name="email" value="<?= isset($_POST['email']) ? $email : ''; ?>" class="form-control">
                </label>
            </div>
            <div class="form-group">
                <label for="message">Message
                    <textarea name="message" class="form-control"><?= isset($_POST['message']) ? $message : ''; ?></textarea>
                </label>
            </div>
            <br>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>