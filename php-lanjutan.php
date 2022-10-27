<?php
// $nama = "eko" ;
 

/*
echo $nama;
echo "<br/>";
echo $nama;
echo "<br/>";
echo $nama;
echo "<br/>";
echo $nama;
echo "<br/>";
echo $nama;
echo "<br/>";
echo $nama;
echo "<br/>";
*/

// perulangan
/*
$no =100;
for ($i=0; $i<$no; $i++) {
    $n= $i + 1;
    echo $n." ".$nama. "<br/>";
}
*/

/*
$no=10;
$i=0;

while ($i < $no) {
    $n= $i + 1;
    echo $n." ". $nama. "<br/>";
    $i++;
}
*/

/*
$no=10;
$i=0;

do {
    $n= $i + 1;
    echo $n." ". $nama. "<br/>";
    $i++;
} while ($i < $no);
*/

/*
$data = array('avanza', 'lamborghini', 'tesla', 'xenia', 'xpander', 'rubicon');

$i=0;
while ($i < count ($data)) {
    echo $data[$i]."<br/>";
    $i++;
}
*/

// echo $data[5];

/*
foreach ($data as $value) {
    echo $value. "<br>";
}

*/



// PERCABANGAN

/*
$nama = "putu" ;

if ($nama == "putu") {
    echo $nama." adalah orang bali";
}else if ($nama == "eko") {
    echo $nama." berasal dari pulau jawa ";
}else {
    echo $nama." darimana ya?";
}
*/

/*
switch ($nama) {
    case "putu";
        $pesan = $nama. " adalah orang Bali";
    break;
    case "eko";
        $pesan = $nama. " berasal dari pulau jawa ";
    break;
    default;
        $pesan = $nama. " darimana ya?";

}
echo $pesan;
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Input nama dan diulang</h1>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <label>Nama</label>
        <input type="text" name="nama">
        <label>Jumlah</label>
        <input type="text" name="no">
        <input type="submit" name="submit" value="submit">
    </form>

    <?php
    if (!empty ($_POST['submit'])) {
        switch ($_POST['nama']) {
            case "putu";
                $pesan = $_POST['nama']. " adalah orang Bali";
            break;
            case "eko";
                $pesan = $_POST['nama']. " berasal dari pulau jawa";
            break;
            default;
                $pesan = $_POST['nama']. " darimana ya?";
        }
        for ($i=0;$i<$_POST['no'];$i++) {
            echo $pesan."<br>";
        }
    } else {
        echo "anda belum input nama dan jumlah";
    }
  
    
    ?>

</body>
</html>




