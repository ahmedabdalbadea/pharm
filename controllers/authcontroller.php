
<?php 
session_start();
include 'config/connect.php';

$errors = array();
$email = '';

if (isset($_POST['create'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $type = $_POST['type'];

    $eamilQuery = 'SELECT * FROM users WHERE email=? LIMIT 1';
    $stm = $conn->prepare($eamilQuery);
    $stm->bind_param('s', $email);
    $stm->execute();
    $result = $stm->get_result();
    $userCount = $result->num_rows;

    $stm->close();

    $phoneQuery = 'SELECT * FROM users WHERE phone=? LIMIT 1';
    $stmp = $conn->prepare($phoneQuery);
    $stmp->bind_param('s', $phone);
    $stmp->execute();
    $resultp = $stmp->get_result();
    $userCountp = $resultp->num_rows;

    $stmp->close();

    if ($userCount > 0){
        $errors['email'] = 'Email Already exists';
    }
    if ($userCountp > 0){
        $errors['phone'] = 'phone Already exists';
    }

    if (count($errors) === 0){
        $password = password_hash($password, PASSWORD_DEFAULT);
        $token = bin2hex(random_bytes(50));

        $sql = 'INSERT INTO users (name, email, phone, password, type, token) VALUES (?, ?, ?, ?, ?, ?)';
        $stm = $conn->prepare($sql);
        $stm->bind_param('ssssss', $name, $email, $phone, $password, $type, $token);

        if($stm->execute()){
            $user_id = $conn->insert_id;
            $_SESSION['id'] = $user_id;
            $_SESSION['phone'] = $phone;
            $_SESSION['email'] = $email;

            $_SESSION['message'] = 'You are now logged in!';
            $_SESSION['alert-class'] = 'alert-success';
            header('location:login.php');
            exit();
        }
        else{
            $errors['db_error'] = 'Database Error: Failed to register';
        }
    }

}

if (isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(empty($email)){
        $errors['email'] = 'email required';
    }
    if(empty($password)){
        $errors['password'] = 'password required';
    }

    if (count($errors) === 0){
        $sql = 'SELECT * FROM users WHERE email=? LIMIT 1';
        $stm = $conn->prepare($sql);
        $stm->bind_param('s', $email);
        $stm->execute();
        $result = $stm->get_result();
        $num_rows = $result->num_rows;
        if($num_rows > 0){
            $user = $result->fetch_assoc();
            if(password_verify($password, $user['password'])){
                $email = $user['email'];
                $token = bin2hex(random_bytes(50));
                $sql = 'UPDATE users SET token=? WHERE email=?';
                $stm = $conn->prepare($sql);
                $stm->bind_param('ss', $token, $email);
                $stm->execute();

                if ($stm->execute()) {
                    $_SESSION['id'] = $user['id'];
                    $_SESSION['email'] = $user['email'];
                    $_SESSION['name'] = $user['name'];

                    $_SESSION['message'] = 'You are now logged in!';
                    $_SESSION['alert-class'] = 'alert-success';
                    header('location:welcome.php');
                    exit();
                }
            }
        }else{
            $errors['login-fail'] = 'worng crendentials';
        }

    }
}

if(isset($_GET['logout'])){
    $email = $_SESSION['email'];
    $token = null;

    $sql = 'UPDATE users SET token=? WHERE email=?';
    $stm = $conn->prepare($sql);
    $stm->bind_param('ss', $token, $email);
    $stm->execute();

    if ($stm->affected_rows > 0) {
        session_destroy();
        unset($_SESSION['id']);
        unset($_SESSION['email']);
        unset($_SESSION['name']);

        header('location:login.php');
        exit();
    } else {
        $errors['logout-fail'] = 'Logout failed';
    }
}


?>