<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <?php 
            function cuuChuong($n){
                echo "<h3> bảng cửu chương ${n} </h3>";
                for($i = 0; $i < 10;$i++)
                {
                    $result = $i * $n;
                    echo $i . " x " . $n . " = " . $result . "<br>"; 
                }
            }
            
        ?>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <input type="text" name="number" placeholder="Nhập số cửu chương">
            <input type="submit" value="tính" , name="submit">
            <!-- <label for="number"> Nhập số bạn muốn xem cửu chương: </label>
            <input type="text" name="number" id="number"> -->
        </form>
        <?php
            if(isset( $_POST['submit']) ){
                $n = $_POST['number'];
                echo "<h3> Bảng cửu chương ${n} </h3>";

                cuuChuong($n);
            }
        ?>
    </body>

</html>