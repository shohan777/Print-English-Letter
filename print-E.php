<?php


    $sym = "#";
    for ($i=0; $i < 3; $i++) {
        for ($full=0; $full<12; $full++) {
            echo $sym;
        }
        echo "<br />";
        if ($i < 2) {
            for ($y=0; $y<3; $y++) {
                echo $sym."<br />";
            }
        }
    }


 ?>