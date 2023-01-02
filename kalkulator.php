<?php
    $odl = 1300;
    $wybor = 2;
    /*
    1 - mila morska -> 1852.2 m
    2 - mila lądowa -> 1619.33 m
    3 - jard -> 0.913 m
    4  stopa -> 0.305 m
    5  cal -> 0.0254 m

    */
    switch ($wybor){
        case 1:
            echo "odległość: $odl m, wynosi: ".number_format($odl/1852.2,2)." mil morskich<br>";
            break;
        case 2:
            echo "odległość: $odl m, wynosi: ".number_format($odl/1619.33,2)." mil lądowych<br>";
            break;
        case 3:
            echo "odległość: $odl m, wynosi: ".number_format($odl/0.913,2)." jardów<br>";
            break;
        case 4:
            echo "odległość: $odl m, wynosi: ".number_format($odl/0.305,2)." stóp<br>";
            break;
        case 5:
            echo "odległość: $odl m, wynosi: ".number_format($odl/0.0254,2)." cala<br>";
            break;
        default:
            echo "zła miara";
            break;
    }
?>
