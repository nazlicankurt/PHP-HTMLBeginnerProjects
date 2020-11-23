<html>
<br><br>
<form action="besUzerindenNot.php" method="POST">
<table border="1">
<tr>
<td>Notunuz:</td><td><input type="text" name="not"></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" style="width:100px;height:25px;" value="Hesapla" name="kontrol"></td>
</tr>
<?php
if(isset($_POST["kontrol"]))
{
$not=$_POST["not"];
$not=$not/20;
echo "Girdiğiniz Notun 5 Üzerinden Karşılığı = ".$not;
echo "<hr><hr>";
}
?>
</html>