<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rumus - rumus</title>
</head>

<body>

    <center>
        <h1>Rumus - rumus</h1>
        <form action="quiz1process.php" method="POST">
            <table border="2px">
                <tr>
                    <td>Nilai1 : </td>
                    <td><input type="text" name="nilai1" id="nilai1" required></td>
                </tr>
                <tr>
                    <td>Nilai2 : </td>
                    <td><input type="text" name="nilai2" id="nilai2" required></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center;">
                        <input type="radio" name="rumus" id="rumus" value="segitiga">
                        <label for="segitiga">segitiga</label>
                        <br>
                        <input type="radio" id="rumus" name="rumus" value="persegi-panjang">
                        <label for="persegi">persegi panjang</label>
                    </td>
                </tr>
            </table>
            <button type="submit">Hitung</button>
            <button type="reset">Batal</button>
        </form>
    </center>

</body>

</html>