<?php include 'controllers/authcontroller.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Css/formstyle.css">
    <title>Log In</title>
</head>
<body>
    <form method="post">
        <h2>Log In</h2>
        <?php if (count($errors) > 0): ?>
            <div class="alert">
            <?php foreach ($errors as $error): ?>
            <li><?php echo $error ?></li>
                <?php endforeach; ?>
            </div>
            <?php endif?>
        <div>
            <input type="email" placeholder="Email" name="email" required>
        </div>
        <div>
            <input type="password" placeholder="Password" name="password" required>
        </div>
        <button id="submit" type="submit" name="login">Log in</button>
        <p id="or">or</p>
        <p>Don't have an account? <a href="signup.php">Sign up</a></p>
    </form>
</body>
</html>