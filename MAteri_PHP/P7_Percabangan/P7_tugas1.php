<html>
    <head>
    <title>Tugas P7</title>
    </head>

    <body>
    <h1><p style="font-family : Serpentine; text-align:center;">
            <i>Rumus-Rumus</i>
        </p></h1>
        <hr class="my-4">

        <form action="P7_Tugas1.POST.php" method="post">

        <table border=1 bgcolor="#ffffff">
        <tr>
            <td colspan=3 align="center"><p style="font-family : SegoeUI;">
            NILAI 1
            </p>
            </td>
            <td><input type="text" name="N1" size="25" maxlength="50"></td>
        </tr>

        <tr>
            <td colspan=3 align="center"><p style="font-family : SegoeUI;">
            NILAI 2
            </p>
            </td>
            <td><input type="text" name="N2" size="25" maxlength="50"></td>
        </tr>
        </table>
		  		<td colspan="2">
			  		<input type="radio" name="Button" value="segitiga" >
	  				<label>Segitiga</label> 
	  				<br/> 
	  				<input type="radio" name="Button" value="persegi" >
	  				<label>Persegi Panjang</label>
  				</td>
		  </tr>
          <br>
		  <tr>
		  	<td style="border: 0;" colspan="2">
		  		<button type="submit" name="submit">submit</button>
		  		<button type="reset" name="batal">batal</button>
		  	</td>
		  </tr>
    </body>
</html>