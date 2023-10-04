<?php

$nilai1 = $_POST['nilai1'];
$nilai2 = $_POST['nilai2'];
$rumus = $_POST['rumus'];

if ($nilai1 == 0 || $nilai2 == 0) {
    $hasil = 'Tidak Ada Hasil Perhitungan';
} else {
    if ($_POST['rumus'] == "segitiga") {
        $rumus = "Segitiga";
        $hasil = 1 / 2 * ($nilai1 * $nilai2);
    } else if ($_POST['rumus'] == "persegi-panjang") {
        $rumus = "Persegi Panjang";
        $hasil = $nilai1 * $nilai2;
    }
}

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
    <h1>Hasil Hitung Rumus</h1>
    <p>Nilai a adalah = <?= $nilai1 ?></p>
    <p>Nilai b adalah = <?= $nilai2 ?></p>
    <p>Rumus yang pilih = <?= $rumus ?></p>
    <p>Hasil = <?= $hasil ?></p>
</body>

</html>