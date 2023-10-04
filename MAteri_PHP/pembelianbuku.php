<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembelian Buku Sederhana</title>
</head>

<body>

    <center>
        <h1>Pembelian Buku Sederhana</h1>
        <form action="pembelianbukuprocess.php" method="POST">
            <table border="2px">
                <tr>
                    <td colspan="2" style="text-align: center;">
                        <p>Form Pembelian Barang Sederhana</p>
                    </td>
                </tr>
                <tr>
                    <td>Nama Pembeli </td>
                    <td><input type="text" name="nama" id="nama" required></td>
                </tr>
                <tr>
                    <td>Tanggal</td>
                    <td><input type="date" name="tgl" id="tgl" required></td>
                </tr>
                <tr>
                    <td>Kode Buku</td>
                    <td>
                        <select name="kd_buku" id="kd_buku">
                            <option value="B0001">B0001</option>
                            <option value="B0002">B0002</option>
                            <option value="B0003">B0003</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Jumlah Beli</td>
                    <td><input type="text" name="jml" id="jml" required></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center;">
                        <button type="submit">Save</button>
                        <button type="reset">Reset</button>
                    </td>
                </tr>
            </table>
        </form>
    </center>

</body>

</html>