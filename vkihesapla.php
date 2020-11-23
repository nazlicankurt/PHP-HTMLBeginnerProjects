<?php
$boy=$_POST['boy'];
$kilo=$_POST['kilo'];
 
$boy=$boy/100; //cm'yi metreye çevirdik
$vki = $kilo/($boy*$boy) ; //kilo bölü boyun karesi
$vki=round($vki,2); //virgülden sonra 2 hane 

echo "Durumunuz ";
if ($vki<20)
echo "Zayıf";

else if($vki>=20 && $vki<=24.9)
echo "Normal";

else if ($vki>=25 && $vki<=29.9)
echo "Hafif Şişman";

else if ($vki>=30 && $vki<=34.9)
echo "Şişman";

else if($vki>=35 && $vki<=44.9)
echo "Sağlık açısından önemli";

else if($vki>=45 && $vki<=49.9)
echo "Aşırı şişman";

else if ($vki>49.9)
echo "Morbid (Ölümcül Şişman)";
 
?>