<html>
    <head>
        <title>Lab 1 - Task 8</title>
    </head>
    <body>
        <h1>Task 8: Print Elements of a 2D Array in a Specific Pattern</h1>
    </body>
</html>
<?php
    $arr1 = [
        [1, 2, 3, 'A'],
        [1, 2, 'B', 'C'],
        [1, 'D', 'E', 'F']
    ];

    for($i=0; $i<3; $i++){
        for($j=0; $j<3-$i; $j++){
            echo "{$arr1[$i][$j]} ";
        }
        echo "<br>";
    }
    echo "<br>";

    for($i=0; $i<3; $i++){
        for($j=3-$i; $j<4; $j++){
            echo "{$arr1[$i][$j]} ";
        }
        echo "<br>";
    }
?>