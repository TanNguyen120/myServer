<?php 
    function cuuChuong($n){
        echo "<h3> bảng cửu chương ${n} </h3>";
        for($i = 0; $i < 10;$i++)
        {
            $result = $i * $n;
            echo $i . " x " . $n . " = " . $result . "<br>"; 
        }
    }
    cuuChuong(13);
?>