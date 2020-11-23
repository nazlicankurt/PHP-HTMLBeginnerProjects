<html>
<form action="vize.php" method="POST">
<table border="1">
<tr>
<td> Vize Notu&nbsp </td><td><input type="text"name="not1"></td>
</tr>
<tr>
<td> Final Notu&nbsp </td><td><input type="text"name="not2"></td>
</tr>
<tr>
<td colspan="2" align="center"><input style="width:100px:height:25px;"type="submit" value"Gönder"></td>
</tr>
<?php
$not1=$_POST["not1"];
$not2=$_POST["not2"];
$harfnotu="test";
$ort=($not1*4/10)+($not2*6/10);
if($ort>=0 && $ort<=39)
	$harfnotu=FF;
elseif($ort>=40 && $ort<=49)
	$harfnotu=FD;
	elseif($ort>=50 && $ort<=54)
	$harfnotu=DD;
	elseif($ort>=55 && $ort<=59)
	$harfnotu=DC;
	elseif($ort>=60 && $ort<=64)
	$harfnotu=CC;
	elseif($ort>=65 && $ort<=69)
	$harfnotu=CB;
	elseif($ort>=70 && $ort<=79)
	$harfnotu=BB;
	elseif($ort>=80 && $ort<=89)
	$harfnotu=BA;
	elseif($ort>=90 && $ort<=100)
	$harfnotu=AA;
	echo "Ortalamanız=".$ort."<br>";
	echo "Harf Notunuz=".$harfnotu;
	echo "<hr><hr><hr><hr>";
	?>
	