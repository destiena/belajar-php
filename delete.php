<?php

// tangkap data dari form submit
if(isset($_GET['id'])){
    $id = $_GET['id'];

// 1.Buat koneksi dengan Mysql
$con = mysqli_connect("localhost","root","","fakultas");

// 2. Cek koneksi dengan Mysql
if(mysqli_connect_errno()){
    echo "koneksi gagal ". mysqli_connect_eror();
}else{
    echo "koneksi berhasil";
}
// buat sql query untuk insert ke database
// buat query insert dan jalankan
$sql = "DELETE FROM mahasiswa WHERE id=$id";


// jalankan query
if(mysqli_query($con,$sql)){
    echo "Data berhasil dihapus";
}else{
    echo "Ada error". mysqli_error($con);
}

mysqli_close($con);
}

?>