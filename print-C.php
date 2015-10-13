<?php


    $sym = "#";
    for ($i=0; $i < 2; $i++) {
        for ($full=0; $full<10; $full++) {
            echo $sym;
        }
        echo "<br />";
        if ($i < 1) {
            for ($y=0; $y<6; $y++) {
                echo $sym."<br />";
            }
        }
    }


 ?>