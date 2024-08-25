<?php

$user= 'semb';
$password = '123';

// if(isset($_POST['submit'])) {
//     if($_POST['user']==$user && $_POST['password']==$password) {
//         header('location:index.php?user=' . $user);
//         echo'login berhasil';
//     }else{
//         echo'login gagal';
//     }
// }

if (isset($_POST['submit'])) {
    if ($_POST['user']== $user && $_POST['password']==$password) {
        // header('location:index.php')
        echo'login berhasil';
    }else {
        echo 'login gagal';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body style="background: url(images/bg.png) no-repeat; background-size: cover;">
    <div class="login-form">
        <form action="" method="post">
            <div class="form-group">
                <label>Username</label>
                <input required class="au-input au-input--full" type="text" name="username" placeholder="Username">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input required class="au-input au-input--full" type="password" name="password" placeholder="Password">
            </div>
            <div class="login-checkbox">
                <label>
                    <input type="checkbox" name="remember">Remember Me
                </label>
                <label>
                    <a href="#">Forgotten Password?</a>
                </label>
            </div>
            <br>
            <button name="btnLogin" class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign in</button>
        </form>
    </div>
</body>
</html>