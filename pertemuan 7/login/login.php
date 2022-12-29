<?php
//Apakah tombol submit sudah di tekan atau belum
if(isset($_POST["submit"])){
// Cek Username dan Password benar atau salah
    if($_POST["username"] == "admin" && $_POST["password"] == "123"){
// Jika Username dan Password benar maka akan berpindah ke halaman admin
        header("Location: admin.php");
        exit;
    } else{
// jika salah maka akan muncul error
        $error = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Halaman Login</h1>
    <?php if(isset($error)) : ?>
        <p style="color: red; font-style:italic;">Username dan Password Salah!!</p>
    <?php endif; ?>
    <ul>
        <form action="" method="post">
            <li><label for="username">Username : </label></li>
            <input type="text" name="username" id="username">
            <li><label for="password">Password : </label></li>
            <input type="password" name="password" id="password">
            <li><button type="submit" name="submit">Login</button></li>
        </form>
    </ul>
</body>
</html>