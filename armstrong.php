<?php
 
for ($x=1; $x<=9; $x++) {
 

$ilk=$x*$x*$x;
 
 
for ($y=0; $y<=9; $y++) {
 
 
$orta=$y*$y*$y;
 
for ($z=0; $z<=9; $z++) {
 
$son=$z*$z*$z;
 
 
$armstrong=$x.$y.$z;
 
if ($ilk+$orta+$son==$armstrong){
 
 
echo $armstrong." bir armstrong sayısıdır <br>";
 
}
 
}
 
}
 
}
 
?>