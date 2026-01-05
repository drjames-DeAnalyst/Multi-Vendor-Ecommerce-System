<?php
include "../includes/db.php";
include "../includes/captcha.php";

$msg = "";

if (isset($_POST['register'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $captcha = $_POST['captcha'];

    if (!preg_match("/^[a-zA-Z0-9._%+-]+@gmail\.com$/", $email)) {
        $msg = "Only Gmail allowed";
    } elseif (!preg_match("/(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*#?&])/", $pass)) {
        $msg = "Weak password";
    } elseif ($captcha !== $_SESSION['captcha']) {
        $msg = "Invalid captcha";
    } else {
        $hash = password_hash($pass, PASSWORD_DEFAULT);
        $stmt = $conn->prepare("INSERT INTO users (email,password) VALUES (?,?)");
        $stmt->bind_param("ss", $email, $hash);
        $stmt->execute();
        $msg = "Registration successful";
    }
}

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE email=?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $res = $stmt->get_result();

    if ($row = $res->fetch_assoc()) {
        if (password_verify($pass, $row['password'])) {
            $_SESSION['user'] = $row;
            header("Location: ../admin/dashboard.php");
        } else {
            $msg = "Invalid login";
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login | Register</title>
<link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<h2>Login / Register</h2>
<p><?= $msg ?></p>

<form method="post">
<input type="email" name="email" placeholder="Gmail only" required>
<input type="password" name="password" placeholder="Strong password" required>
<p>Captcha: <b><?= $_SESSION['captcha'] ?></b></p>
<input type="text" name="captcha" placeholder="Enter captcha">
<button name="login">Login</button>
<button name="register">Register</button>
</form>

</body>
</html>