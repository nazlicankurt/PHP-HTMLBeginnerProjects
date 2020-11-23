<?php
	
	if($_POST){
		$sayi1 = $_POST["sayi1"]; // birinci sayı değerini $sayi1 değişkenine aktardık.
		$sayi2 = $_POST["sayi2"]; // ikinci sayı değerini $sayi2 değişkenine aktardık.
		$islem = $_POST["islem"]; // işlem deki işareti $islem değişkenine aktardık.
		
		if($islem == "+"){
			echo $sayi1+$sayi2; //Eğer işlem + eşitse
		}elseif($islem == "-"){
			echo $sayi1-$sayi2; //Yada işlem - eşitse
		}elseif($islem == "*"){
			echo $sayi1*$sayi2; //Yada işlem * eşitse
		}elseif($islem == "/"){
			echo $sayi1/$sayi2; //Yada işlem / eşitse
		}
	}
	
?>
<form action="" method="POST">	
	Sayi1: <input type="text" name="sayi1" /> <!-- Sayi1 inputu -->
	Sayi2: <input type="text" name="sayi2" /> <!-- Sayi2 inputu -->
	Hesap Turu:
	<select name="islem"><!-- islem select box ı -->
		<option value="+">Toplama</option>
		<option value="-">Cikarma</option>
		<option value="*">Carpa</option>
		<option value="/">Bolme</option>
	</select>
	<input type="submit" value="Hesapla!" /> <!-- submit -->
</form