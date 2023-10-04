<html>
    <head>
        <title>Menghitung Luas Lingkaran</title>
    </head>

    <body>
        <?php 
        //konstanta utk nilai judul
        define ("Judul", "Hitung Luas Lingkaran");

        //konstanta utk nilai phi
        define ("PHI", "3.14");
        echo Judul;

        $r=100;
        echo "</br> Jari-jari : $r </br>\n";
        $luas=PHI * $r * $r;
        echo "luas Lingkaran = $luas"

        ?>
    </body>
</html>