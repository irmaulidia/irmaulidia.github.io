<?php
include "koneksi.php";

$id= $_GET['id'];
$nama = $_GET['name'];
$harga = $_GET['price'];
$gambar = $_GET['foto']

$query = " UPDATE prduct SET product_name= '$nama', harga='$harga', url_foto= '$gambar' WHERE id = '$id' ";
$result = mysqli_query($connect,$query); 

if($result){
    echo "Berhasil update data";
?>

<a href="homeCRUD.php">Lihat data </a>
<?php
}
else{
    echo "Gagal update data <br>". mysqli_error($connect);
}

?>