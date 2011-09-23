<?php
$bottles = 99;
  while ($bottles > 0) {
    echo "$bottles bottles of beer on the wall, ";
    echo "$bottles bottles of beer,";
    echo "take one down and pass it around...</br>";
    $bottles--;
} 
if($bottles < 1) {
echo "</p>Time to buy more beer!";
}
?>
