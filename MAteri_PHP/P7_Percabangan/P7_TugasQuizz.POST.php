<?php

$nama = $_POST['nama'];
$tgl = $_POST['tgl'];
$kd_buku = $_POST['kd_buku'];
$jml = $_POST['jml'];

if ($kd_buku == "B0001") {
    $judul = "Microsoft Access 2010";
    $pengarang = "Kurnia";
    $harga = 19500;
} 
else if ($kd_buku == "B0002") {
    $judul = "PHP dan MySQL untuk Pemula";
    $pengarang = "M Irmansyah";
    $harga = 25000;
} 
else if ($kd_buku == "B0003") {
    $judul = "Web Untuk Bisnis";
    $pengarang = "Kadir";
    $harga = 65000;
}
else if ($kd_buku == "B0004") {
    $judul = "ACES at War : art of war";
    $pengarang = "Project Aces";
    $harga = 165000;
}
else if ($kd_buku == "B0005") {
    $judul = "Battle of Arcadia";
    $pengarang = "Natalie Rusakova";
    $harga = 375000;
}

$total = $harga * $jml;
?>


<html>

<head>
    <title>Hasil POSTS</title>
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

    <hr>

    <h2>
		 <a href="https://localhost/WEB_PRO1/MAteri_PHP/P7_Percabangan/P7_TugasQuizz.php">Input again</a> 
		 </h2>
</body>

</html>