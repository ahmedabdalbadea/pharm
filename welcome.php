<?php include 'controllers/authcontroller.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>welcome</title>
    <link rel="stylesheet" href="Css/welcome.css">
</head>
<body>
    <div class='parent'>
        <div>
            <?php  if(!isset($_SESSION['message'])):?>
            <div class="alert <?php echo $_SESSION['alert-class']; ?>">
            <?php 
            echo $_SESSION['message'];
            unset($_SESSION['message']);
            unset($_SESSION['alert-class']);
            ?>
        </div>
        <?php endif;?>
        <p>You are logged in!</p>
        <h3>Welcome, <?php echo $_SESSION['name']; ?></h3>
        <a href="index.php" class="main">main page</a>
        <a href="index.php?logout=1" class="logout">logout</a>
        </div>
</body>
</html>