<?php
// 1.Buat koneksi dengan Mysql
$con = mysqli_connect("localhost","root","","fakultas");

// 2. Cek koneksi dengan Mysql
if(mysqli_connect_errno()){
    echo "koneksi gagal ". mysqli_connect_eror();
}else{
    echo "koneksi berhasil";
}

// 3. membaca data dari table mysql
$query = "SELECT * FROM mahasiswa";

// 4. tampilkan data,dengan menjalankan sql query
$result = mysqli_query ($con,$query);
$mahasiswa = [];
if ($result){
    // tampilkan data satu persatu
   while ($row = mysqli_fetch_assoc ($result)) {
    $mahasiswa []= $row;
   }
   mysqli_free_result ($result);
}

// 5. tutup koneksi mysql
mysqli_close($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data mahasiswa</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <table border="1" style="width:100%;">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
        </tr>
        <?php foreach ($mahasiswa as $value): ?>
        <tr>
            <td><?php echo $value["nim"]; ?></td>
            <td><?php echo $value["nama"]; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>