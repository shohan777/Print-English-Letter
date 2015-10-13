<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Show letter</title>
    <style>
        select{
            padding: 5px;
        }
        input{
            padding: 5px;
        }
    </style>
</head>
<body>
    <form action="" method="GET">
        <select name="letter">
            <option value="l" >L</option>
            <option value="f">F</option>
        </select>
        <input type="text" name="sym" placeholder="Symbol">
        <input type="submit" name="sub" value="Show">
        <br>
        <br>
        <br>
        <br>
    </form>
    <?php
        if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['sub'])){
                $sym = $_GET['sym'];
            function f(){
                global $sym;
                for ($i=0; $i < 2; $i++) {
                    for ($y=0; $y<8; $y++) {
                        echo $sym;
                    }
                    for ($z=0; $z<4; $z++) {
                        echo "$sym<br />";
                    }
                }
            }

            function l(){
                global $sym;
                for ($i=0; $i < 1; $i++) {
                    for ($y=0; $y<6; $y++) {
                        echo $sym ."<br />";
                    }
                    for ($z=0; $z<10; $z++) {
                        echo "$sym";
                    }
                }
            }

            if($_GET['letter'] == 'l'){
                l();
            }else{
                f();
            }
        }
    ?>
</body>
</html>























