<html> <head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1254">
</head>
<body> <center>
<table width="800" border "1" height="600">
<tr>
<td width="150" valign= "top">

<a href="index.php"> ANASAYFA</a> <br>
<a href="index.php?go=hakkimda"> HAKKIMDA</a> <br>
<a href="index.php?go=iletisim"> İLETİŞİM </a> <br>
<a href="index.php?go=odevler"> PHP Ödevlerim </a> <br>
</td>

<td valign="top">
<?php
switch(@$_GET["go"])
{
	case "iletisim": include"iletisim.php"; 
	break;
	case "hakkimda": include"hakkimda.php";
	break;
	case "odevler": include"odevler.php";
	break;
	default: include"anasayfa.php";
	break;
}
?>
</td>
</table> </center>
</body> </html>