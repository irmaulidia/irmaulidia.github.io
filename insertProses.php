<?php
include "koneksi.php";

$id= $_GET['id'];
$nama = $_GET['name'];
$harga = $_GET['price'];
$gambar = $_GET['foto'];

$sql = "INSERT INTO prduct(id,product_name,harga, url_foto)
        VALUES('$id', '$nama', '$harga', '$gambar')";

// function upload(){
//     $namaFile = $_FILES['gambar']['namaGambar'];
//     $ukuranFile = $_Files['gambar']['size'];
//     $error = $_FILES['gambar']['error'];
//     $tmpName = $_FILES['gambar']['tmp_name'];

//     if($error == 4){
//         echo "<script>
//         alert('pilih gambar terlebih dahulu')
//         </script>";
//         return false;
//     }
//     $ekstensiGambarValid=['jpg', 'jpeg', 'png'];
//     $ekstensiGambar = explode('.', $namaFile);
//     $ekstensiGambar = strtolower(end($ekstensiGambar));
//     if(!in_array($ekstensiGambar, $ekstensiGambarValid)){
//         echo "<script>
//         alert('file yang diupload bukan gambar')
//         </script>";
//         return false;
//     }
//     move_uploaded_file($tmpName, 'img/'.$url_foto);

//     return $namaFile;


// }


if(mysqli_query($connect, $sql)){
    echo "Data berhasil ditambahkan";
}

else{
    echo "Data gagal ditambahkan <br>". mysqli_error($connect);
}
mysqli_close($connect);

?>