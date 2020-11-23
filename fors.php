<?php
echo "<table border='1px' width='300px' height='300px'>";//1px çizgi kalınlığında 300px genişlikte 300px yükseklikte bir tablo oluşturuluyor
    for($satir=1; $satir<10; $satir++)//9 satırlık tablooluşturuluyor
    {
        echo "<tr>";//satır oluşturuluyor.
        for($sut = 1; $sut<10; $sut++)
        {
            echo "<td bgcolor = '";//satır oluşturur.
            if($sut==1 && $satir<9)//sut değeri 1'e eşitse ve satır değeride 9'dan küçük ise;
                echo "#aabbdd'> ".(9-$satir);//9'dan satır değeri çıkartılır yazılır.
            else if ($satir == 9 && $sut>1)//eğer satır değeri 9'a eşitse ve sut değeri 1'den büyükse;
                echo "#aabbdd'> ".chr(63+$sut);//sut değeriyle 63 sayısını toplar karakter karşılığını yazar. chr ascii dönüşümü yapar
            else
            {
                if (($satir + $sut) % 2 == 0)//satır ve sutun değerlerini toplar 2'ye göre modunu alır eğer 0'a eşitse;
                    echo "#222222'";//siyah tonunda bir arkaplan rengi 
                else
                    echo "#dddddd'";//gri tonunda arkaplan rengi 
                echo "> * ";
            }
            echo "</td>";//açılan sutün kapatılıyor
        }
        echo "</tr>";//oluşturulan satır kapatılıyor
    }
    echo "<table/>";//tablo kapatılıyor
?>