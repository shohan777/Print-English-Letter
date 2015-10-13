<?php


    $sym = "#";
    for ($i=0; $i < 3; $i++) {
        for ($full=0; $full<12; $full++) {
            echo $sym;
        }
        echo "<br />";
        if ($i < 2) {
            for ($loop=0; $loop<3; $loop++) {

                for ($y=0; $y < 24; $y++) {
                    if ($y == 0) {
                        echo $sym;
                    }elseif ($y < 23) {
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