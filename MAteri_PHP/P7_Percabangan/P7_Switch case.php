<?php 
$num = 0;
switch ($num) {
    case 0: $terbilang = "ZERO"; break;
    case 1: $terbilang = "ONE"; break;
    case 2: $terbilang = "TWO"; break;
    case 3: $terbilang = "THREE"; break;
    case 4: $terbilang = "FOUR"; break;
    case 5: $terbilang = "FIVE"; break;
    case 6: $terbilang = "SIX"; break;
    case 7: $terbilang = "SEVEN"; break;
    case 8: $terbilang = "EIGHT"; break;
    case 9: $terbilang = "NINE"; break;
    default: $terbilang = "OUT OF RANGE"; break;
}
echo "countable form of number $num is $terbilang";
?>