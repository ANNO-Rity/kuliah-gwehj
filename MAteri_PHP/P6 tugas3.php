<html>
    <head>
        <title> Biodata forum</title>
    </head>

    <body>
        <h1><p style="font-family : padaloma;">
            REGISTRATION FORM
        </p></h1>
        <hr class="my-4">
        <p style="font-family : Equestria; font-size:30px">
            Fill in the data below 
        </p>
        <form action="showname.php" method="post">
        <pre>
            Name : <input type="text" name="nama" size="25" maxlength="50">
            Address : <textarea rows="4" name = "alamat"> </textarea>
            Place of Birth : <input type="text" name="TLahir" size="25" maxlength="50">
            Date of Birth: <input type="text" name="TGL" size="25" maxlength="50">
        </pre>
        <input type="radio" name="gender" value="male"> Male
        <input type="radio" name="gender" value="female"> Female
        <p>
            Education :
            <select name="Education">
                <option value="Choice">
                <option value="SMA">SMA/K
                <option value="D3">D3
                <option value="S1">S1
                <option value="S2">S2
                <option value="lain">Other
            </select>
        <p>
        <input type="submit" value="process">
            <input type="reset" value="cancel">
            <input type="reset" value="clear">
        </form>
    </body>
</html>