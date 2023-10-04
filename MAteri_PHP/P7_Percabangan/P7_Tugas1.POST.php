<html>
	<head>
		<title>POSTS</title>
	</head>

	<body>
	<?php 
 
 $N1=$_POST['N1'];
 $N2=$_POST['N2'];
 $Button=$_POST['Button'];
  
 if (isset($_POST['submit'])){
	 if ($Button=="segitiga"){
		 $hasil=1/2*$N1*$N2;
  
		 echo "Nilai a adalah=".$N1.'<br>';
		 echo "Nilai b adalah=".$N2.'<br>';
		 echo "Rumus Yang Dipilih= segitiga".'<br>';
		 echo "Hasil Perhitungan Rumus=".$hasil.'<br>';
	 }
	 elseif ($Button=="persegi") {
		 $hasil=$N1*$N2;
  
		 echo "Nilai a adalah=".$N1.'<br>';
		 echo "Nilai b adalah=".$N2.'<br>';
		 echo "Rumus Yang Dipilih= persegi panjang".'<br>';
		 echo "Hasil Perhitungan Rumus=".$hasil.'<br>';
	 }
	 else{
		 echo "periksa pilihan";
	 }
 }
 
		 
  
  
 ?>
 		<h2>
		 <a href="https://localhost/WEB_PRO1/MAteri_PHP/P7_Percabangan/P7_tugas1.php">Input again</a> 
		 </h2>
	</body>
</html>