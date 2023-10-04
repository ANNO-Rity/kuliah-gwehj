<?php

$nama = $_POST['nama'];
$tgl = $_POST['tgl'];
$kd_buku = $_POST['kd_buku'];
$jml = $_POST['jml'];

if ($kd_buku == "B0001") {
    $judul = "PHP & MySQL, untuk orang awam";
    $pengarang = "M. Irmansyah";
    $harga = 26500;
} else if ($kd_buku == "B0002") {
    $judul = "Purpose : Living in the process";
    $pengarang = "Alamanda Shantika";
    $harga = 120000;
} else if ($kd_buku == "B0003") {
    $judul = "the girls in the dark";
    $pengarang = "Akiyoshi Rikako";
    $harga = 87000;
}

$total = $harga * $jml;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil</title>
</head>

<body>

    <p>STRUK PEMBELIAN BARANG SEDERHANA</p>
    <p>Tanggal : <?= $tgl ?></p>
    <p>Nama : <?= $nama ?></p>

    <hr>

    <p>Judul : <?= $judul ?></p>
    <p>Pengarang : <?= $pengarang ?></p>
    <p>Harga buku : <?= $harga ?></p>

    <hr>

    <p>Jumlah Beli : <?= $jml ?></p>
    <p>Total Bayar : <?= $total ?></p>

</body>

</html>