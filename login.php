<?php
    session_start();
    include 'koneksi.php';
    $error='';

    if (isset($_POST['submit'])) {
        if (empty($_POST['username']) || empty($_POST['password'])) {
            $error = "Username atau Password Salah";
        }
    } else {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = mysqli_query($connect, "SELECT * FROM pembeli where username = '$username' AND password = '$password'");
        $rows = mysqli_num_rows($query);

        if ($rows == 1) {
            $_SESSION['account'] = $username;
            header("Location:index.php");
        } else {
            $error = "Username or Password is Invalid";
            echo "<script type=\"text/javascript\">window.alert('$error');
                window.location.href = 'account.php';</script>";
        }
    }