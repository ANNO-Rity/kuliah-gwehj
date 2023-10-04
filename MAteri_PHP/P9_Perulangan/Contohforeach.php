<html>
    <head>
        <Title>
            Penggunaan FOREACH
        </Title>
    </head>

    <body>
        Menggunakan FOREACH
        <br>
        <?php 
        $warna = array ("Red", "Green", "Blue", "Yellow");
        foreach ($warna as $nilai) {
            echo "$nilai <br>";
        }
        ?>
    </body>
</html>