<?php
    include "koneksi.php";

    $username=$_POST['username'];
    $password=md5($_POST['password']);

    $sql="SELECT * FORM user WHERE username='$username' and password='$password'";
    $result=mysqli_query($connect, $sql);
    $row=mysqli_fetch_assoc($result);

    if($cek > 0){
        $_SESSION['username'] = $username;
        $_SESSION['status'] = 'login';
        ?>
        Anda Berhasil Login, silahkan menuju
        <a href = "homeSession.php"> Halaman Home</a> <?php
    }else{
        ?>
        Gagal login, silahkan login lagi
        <a href="sessionLoginForm.html"> Halaman Login </a><?php
        echo mysqli_error($connect);
    }
?>