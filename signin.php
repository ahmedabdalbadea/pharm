<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Css/formstyle.css">
    <title>Sign Up</title>
</head>
<body>
    <form method="post" action="signin.php">
        <h2>Sign Up</h2>
        <div>
            <input type="text" placeholder="Name" id='name' name="name" autofocus>
       </div>
        <div>
            <input type="email" placeholder="Email" id="mail" name="email">
        </div>
        <div>
            <input type="tel" placeholder="Phone" id="tele" name="phone">
        </div>
        <div>
            <input type="password" placeholder="Password" id="pass" name="password">
        </div>
        <div>
            <span>
                <input type="radio" name="type" required value="male">
                <Label>Male</Label>
            </span>
            <span>
                <input type="radio" name="type" required value="female">
                <Label>Female</Label>
            </span>
        </div>
            <button id="submit" onclick="validate()" name="create">Create Account</button>
            <p id="or">or</p>
            <p>Already have an account? <a href="login.html">Log In</a></p>
    </form>
    <script src="Script/singup.js"></script>
    <?php 
    if (isset($_POST['create'])){
        include('connect.php');
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        $type = $_POST['type'];
        $stm = "insert into usersvalues('$name','$email','$phone', '$password', '$type')";
        $result = mysqli_query($conn, $stm);
    }
    ?>
</body>
</html>
