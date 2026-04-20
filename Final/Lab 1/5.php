<html>
    <head>
        <title>Lab 1 - Task 5</title>
    </head>
    <body>
        <h1>Task 5: Print Odd Numbers from 10 to 100</h1>
    </body>
</html>
<?php
    for($i=10; $i<=100; $i++){
        if($i % 2 != 0){
            echo "{$i}<br>";
        }
    }
?>