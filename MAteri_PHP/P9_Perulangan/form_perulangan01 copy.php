<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Latihan</title>
</head>

<body>

    <form action="" method="POST">
        <div class="">
            <label for="ulang">Masukan Jumlah Pengulangan : </label>
            <input name="ulang" type="number">
        </div>

        <div class="">
            <label for="kata">Tuliskan Kata Yang diulang : </label>
            <input name="kata" type="text">
        </div>

        <button type="submit">proses</button>
    </form>

    <p>hasil perulangan</p>
    <?php
    if (count($_POST) != 0) {
        for ($i = 1; $i <= $_POST['ulang']; $i++) {
            echo "$i. " . $_POST['kata'];
            echo "<br>";
        }
    }
    ?>

    <br>

    <select name="" id="">
        <?php for ($i = 1; $i <= $_POST['ulang']; $i++) : ?>
        <option value="<?= $_POST['kata'] ?>"><?= $_POST['kata'] ?></option>
        <?php endfor; ?>
    </select>

</body>

</html>