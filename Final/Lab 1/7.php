<html>
    <head>
        <title>Lab 1 - Task 7</title>
    </head>
    <body>
        <h1>Task 7: Print Patterns</h1>
    </body>
</html>
<?php
    for($i=1; $i<=3; $i++){
        for($b=1; $b<=$i; $b++){
            echo "* ";
        }
        echo "<br>";
    }
    echo "<br>";

    for($i=3; $i>=1; $i--){
        for($b=1; $b<=$i; $b++){
            echo "{$b} ";
        }
        echo "<br>";
    }
    echo "<br>";

    $ch = 'A';
    for($i=1; $i<=3; $i++){
        for($b=1; $b<=$i; $b++){
            echo "{$ch} ";
            $ch++;
        }
        echo "<br>";
    }
?>