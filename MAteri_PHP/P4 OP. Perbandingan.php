<?php 
    $bil1 = 200;
    $bil2 = 40;
    $text1 = "PHP";
    $text2 = "php";

    //sama dengan
    $hasil = $bil1 == $bil2;
    echo "$bil1 == $bil2 = $hasil </br>";

     // tidak sama dengan
     $hasil = $bil1 = $bil2;
     echo "$bil1 != $bil2 = $hasil </br>";

    //lebih dari sama dengan
    $hasil = $bil1 >= $bil2;
    echo "$bil1 >= $bil2 = $hasil </br>";

    //kurang dari sama dengan
    $hasil = $text1 <= $text2;
    echo "$text1  <= $text2 = $hasil </br>";

    //kurang dari 
    $hasil = $text1  < $text2;
    echo "$text1  < $text2 = $hasil </br>";

    //kurang dari 
    $hasil = $text1 > $text2;
    echo "$text1  > $text2 = $hasil </br>";
?>