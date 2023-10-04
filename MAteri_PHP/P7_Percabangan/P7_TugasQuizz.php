<html>
    <head>
    <title>Tugas P7 QUIZZ</title>
    </head>

    <body>
    <h1><p style="font-family : Serpentine; text-align:center;">
            <i>Pembelian Buku Sederhana</i>
        </p></h1>
        <hr class="my-4">

        <form action="P7_TugasQuizz.POST.php" method="post">

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
                            <option value="Choice"></option>
                            <option value="B0001">B0001</option>
                            <option value="B0002">B0002</option>
                            <option value="B0003">B0003</option>
                            <option value="B0004">B0004</option>
                            <option value="B0005">B0005</option>
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
    </body>
</html>