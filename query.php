<?php
    $namaHost = "localhost";
    $username = "root";
    $password = "";
    $database = "praktikumdb";

    $connect = mysqli_connect($namaHost, $username, $password, $database);

    if($connect){
        echo "Koneksi ke MYSQL berhasil <br>";
    }
    else{
        echo "Koneksi ke MYSQL gagal" . mysqli_connect_error();
    }
    $sql = "INSERT INTO user2(id, username, password)
            VALUES('1', 'admin1', '124')";
    if(mysqli_query($connect, $sql)){
        echo "Record berhasil ditambahkan";
    }
    else{
        echo "Record gagal ditambahkan <br>" . mysql_error($connect);
    }

    mysqli_close($connect);
?>