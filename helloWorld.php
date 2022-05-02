<?php 
    function cuuChuong($n){
        echo "<h3> bảng cửu chương ${n} </h3>";
        for($i = 0; $i < 10;$i++)
        {
            $result = $i * $n;
            echo $i . " x " . $n . " = " . $result . "<br>"; 
        }
    }
    cuuChuong($_GET['number']);
?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <a href="http://localhost/myServer/helloWorld.php?number=4">Xem bảng cửu chương 4 tại đây</a>
    </body>

</html>