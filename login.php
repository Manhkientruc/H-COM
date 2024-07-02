<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == 'admin' && $password == '123456') {
        $_SESSION['username'] = $username;
        header("Location: admincp/index.php");
        exit();
    } elseif ($username == 'staff1' && $password == '189203') {
        $_SESSION['username'] = $username;
        header("Location: adminstaff/index.php");
        exit();
    }elseif ($username == 'staff2' && $password == '123456') {
        $_SESSION['username'] = $username;
        header("Location: adminstaff/index.php");
        exit();
    }elseif ($username == 'staff3' && $password == '123456') {
        $_SESSION['username'] = $username;
        header("Location: adminstaff/index.php");
        exit();
    }elseif ($username == 'store' && $password == '123456') {
      $_SESSION['username'] = $username;
      header("Location: adminstore/index.php");
      exit();
    }else {
        echo '<script>alert("Tài khoản hoặc mật khẩu không đúng")</script>';
        header("Location: login.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Đăng nhập</title>
    <style>
    body{
        font-family: 'Helvetica, Arial, sans-serif';
        background: radial-gradient(circle, rgb(255, 68, 224) 0%, rgb(0, 204, 255) 100%);
    }
    .container {
        position:absolute;
        right: 36%;
        top:15%;
        display: flex;
        flex-direction: column;
        align-items: center;
        font-size: 30px;
    }
    #loginForm {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    #loginForm input {
        padding: 10px;
        margin: 10px;
        font-size: 30px;
    }
    </style>
</head>
<body>
    <div class="container"><h2>Đăng nhập</h2>
    <form method="POST" action="login.php" id="loginForm">
        <b><label for="username">Tài khoản:</label></b>
        <input type="text" id="username" name="username" required><br>

        <b><label for="password">Mật khẩu:</label></b>
        <input type="password" id="password" name="password" required><br>

        <input type="submit" value="Đăng nhập">
    </form></div>
</body>
</html>