<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Php İle Çarpım Tablosu</title>
</head>
<body>
 
    <table align="center" border="1" width="700" cellspacing="5" cellpadding="10">
        <tbody>
            <tr>
 
<?php
 
    for ($i=1; $i<=25;$i++)
    {
        echo '<td>';
            for ($j=1; $j<=10;$j++)
            {
                echo $i.' x '.$j.' = '. $i*$j.'<br />';
            }
        echo '</td>';
        if($i%5==0) echo '</tr> <tr>';
    }
 
?>
                            </tr>
        </tbody>
    </table>
        </body>
</html>