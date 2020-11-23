<form action="" method="POST">
<b>Not Girişi</b><hr width="70" align="left">
<table border="1">
 
<tr>
<td>
Öğrencinin Adı : </td><td> <input type="text" name="ad"></td>
</tr>
<tr>
<td>
Öğrencinin Vizesi : </td><td> <input type="text" name="vize"></td>
</tr>
<tr>
<td>
Öğrencinin Finali : </td><td> <input type="text" name="final"></td>
</tr>
 
</table>
<hr width="70" align="left">
<input type="submit" name="gonder" value="Gönder">
</form>
<?php
if(isset($_POST) && !empty($_POST["ad"]))
{
    mysql_connect("localhost","root","");
    mysql_select_db("notlar");
    $ad=$_POST["ad"];
    $vize=$_POST["vize"];
    $final=$_POST["final"];
    $ort=($vize*0.4)+($final*0.6);
    function hesapla($ort)
    {
if($ort<=19) $harf="FF";
elseif($ort<=29)$harf="FD";
elseif($ort<=39)$harf="DD";
elseif($ort<=49) $harf="DC";
elseif($ort<=59) $harf="CC";
elseif($ort<=69) $harf="CB";
elseif($ort<=79) $harf="BB";
elseif($ort<=89) $harf="BA";
elseif($ort<=100)$harf="AA";
else echo " bu notun harf karşılığı yoktur.";
return $harf;
    }
    $durum=hesapla($ort);
 
        if(!empty($ad) && !empty($vize) && !empty($final)){
     
    $sonuc=mysql_query("INSERT INTO ogrenciler(no,ad,vize,final,ort,durum) VALUES ('','$ad','$vize','$final','$ort','$durum')");
    if($sonuc)
    {
        echo "Adı : ".$ad;
        echo "<br>Notu : ".$ort;
        echo "<br>Harf Notu : ".hesapla($ort);
        echo "<br>Öğrenci Başarıyla Veritabanına Kayıt Edildi.<hr width='270' align='left'>";
    }
    else echo "Öğrenci Kayıt Edilemedi.";
     
    $sec=mysql_query("select * from ogrenciler ORDER BY no DESC");
     
    echo '<table border="1"><tr>';
    echo "<th>Adı</th><th>Vize</th><th>Final</th><th>Ortalama</th><th>Harf Notu</th></tr>";
     
    while($dizi=mysql_fetch_array($sec))
    {
    extract($dizi);
    echo "<tr><td>".($ad)."</td>";
    echo "<td>".($vize)."</td>";
    echo "<td>".$dizi['final']."</td>";
    echo "<td>".$dizi['ort']."</td>";
    echo "<td>".$dizi['durum']."</td>";
     
         
     
    }
echo "</table>";
$say=mysql_num_rows($sec);
echo "Toplam Öğrenci Sayınız : ". $say;
 
}
 
 
}
 
?>
