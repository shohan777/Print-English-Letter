<?php


    $sym = "#";
    for ($i=0; $i < 2; $i++) {
        for ($full=0; $full<12; $full++) {
            echo $sym;
        }
        echo "<br />";
        if ($i < 2) {
            for ($s=0; $s<3; $s++) {

                for ($y=0; $y < 22; $y++) {
                    if ($y == 0) {
                        echo $sym;
                    }elseif ($y < 21) {
                        echo "&nbsp;";
                    }else {
                        echo $sym;
                    }
                }
                echo "<br/>";
            }
        }
    }


 ?>