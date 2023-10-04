<html>
    <head>
        <title> Comment forum </title>
    </head>

    <body>
        <h1><p style="font-family : padaloma;">
            GUEST BOOK
        </p></h1>
        <hr class="my-4">
        <p style="font-family : Equestria; font-size:30px">
            Your comment and suggestions are very helpful <br>
            for us to improve our quality site
        </p>
        <form action = "P5_commshow.php" method="get">
            Enter your name :<input type="text" name = "nama" size="25">
        <br>
        <form action = "P5_commshow.php" method="get">
            Enter your email :<input type="text" name = "email" size="25">
            <br>
        <form action = "P5_commshow.php" method="get">
            enter your comment : <textarea rows="4" name = "comment"> </textarea>
        <br>
        <br>
            <input type="submit" value="process">
            <input type="reset" value="cancel">
        </form>
    </body>
</html>