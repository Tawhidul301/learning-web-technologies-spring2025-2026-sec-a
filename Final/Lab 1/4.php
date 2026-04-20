
<html>
    <head>
        <title>Lab 1 - Task 4</title>
    </head>
    <body>
        <h1>Task 4: Find the Largest Number</h1>
    </body>
</html>


<?php
    $num1=154;
    $num2=24;
    $num3=745;
    if($num1 > $num2 && $num1 > $num3){
        echo "{$num1} is the largest number";
    }
    else if($num2 > $num1 && $num2 > $num3){
        echo "{$num2} is the largest number";
    }
    else{
        echo "{$num3} is the largest number";
    }
?>