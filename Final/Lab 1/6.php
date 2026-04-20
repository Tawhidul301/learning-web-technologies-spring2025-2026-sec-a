<html>
    <head>
        <title>Lab 1 - Task 6</title>
    </head>
    <body>
        <h1>Task 6: Search for a Number in an Array</h1>
    </body>
</html>
<?php
    $arr1 = [10, 20, 30, 40, 50];
    $search = 30;
    $found = false;

    for($i=0; $i<count($arr1); $i++){
        if($arr1[$i] == $search){
            $found = true;
            break;
        }
    }
    if($found)
        echo "{$search} is found in the array";
    else
        echo "{$search} is not found in the array";
?>