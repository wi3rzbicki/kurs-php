<?php
$a = 2;
switch($a){
    case 2:
        for($i=$a;$i<12;$i++){
            echo $i." do potegi 2 = ".pow($i,2);
            echo "<br>";
        }
        break;

    case 3:
        for($i=$a;$i<13;$i++){
            echo pow($i,3);
            echo "<br>";
        }
        break;

    case 4:
        for($i=$a;$i<14;$i++){
            echo pow($i,4);
            echo "<br>";
        }
        break;
    default:
    echo "inna wartość";
}
?>