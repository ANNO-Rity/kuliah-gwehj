<html>
    <head>
        <title> method get process </title>
    </head>

    <body>
        <?php
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $TLahir = $_POST['TLahir'];
        $TGL = $_POST['TGL'];
        $gender = $_POST['gender'];
        $Education = $_POST['Education'];
        ?>
        <table border=1 bgcolor="#abdbe3">
        <tr>
            <td colspan=2 align="center"><p style="font-family : dodger;">
            <i>data mahasiswa</i>
            </p>
            </td>
        </tr>
        
        <tr>
            <td align="center">Name</td>
            <td align="center"><?php echo $nama; ?></td>
        </tr> 

        <tr>
            <td align="center">Address</td>
            <td align="center"><?php echo $alamat; ?></td>
        </tr> 

        <tr>
            <td align="center">place of birth</td>
            <td align="center"><?php echo $TLahir; ?></td>
        </tr>
        
        <tr>
            <td align="center">Date of Birth</td>
            <td align="center"><?php echo $TGL; ?></td>
        </tr> 

        <tr>
            <td align="center">Gender</td>
            <td align="center"><?php echo $gender; ?></td>
        </tr> 

        <tr>
            <td align="center">Education</td>
            <td align="center"><?php echo $Education; ?></td>
        </tr> 
    </table>
        <h2>
        <a href="https://localhost/WEB_PRO1/MAteri_PHP/P6%20tugas3.php">Input again</a> 
        </h2>
    </body>
</html>