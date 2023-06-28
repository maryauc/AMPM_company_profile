<?php
session_start();

include('config.php');

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $passwordenc = md5("AroundMePM" . md5('$password'));

    $query = mysqli_query($koneksi, "SELECT * from user WHERE username = '$username' AND password = '$passwordenc'");
    $user = mysqli_fetch_array($query);

    if ($user['username'] == $username && $user['password'] == $passwordenc) {
        $_SESSION['login'] = true;
        $_SESSION['name'] = $user['name'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['level'] = $user['level'];
        header('location: ../app/index.php');
    } else if ($username == '' || $password == '') {
        header('Location:../index.php?error=2');
    } else {
        header('Location:../index.php?error=1');
    }
}
