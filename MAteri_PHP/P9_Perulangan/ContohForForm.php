<html>
    <head>
        <title>
            Perulangan form tapi pake form
        </title>
    </head>

    <body>
        <p style="font-family:SegoeUI;"> Penggunaan pada form</p>
        <br>
        <?php
        echo "<form name = form1 method=post>";
        echo "Tanggal";
        echo "<select name = tanggal>";
        for ($tanggal=1; $tanggal<=31; $tanggal++)
            {
                echo "<option value=".$tanggal.">".$tanggal."</option>";
            }
        echo"</select>";
        echo"</form>";
        ?>
    </body>
</html>