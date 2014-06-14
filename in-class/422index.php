<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <br><br><br><br>
<?php
$numbers = [1,2,3,4];

        print_r ($numbers);

        echo $numbers[2];
?>
        
        <br>
        <?php
$names = ["Alice", "Bob", "Carmen"];
        print_r ($names);
?>
        
        <br>
        <?php        

$book = ["title" => "Moby Dick"];
        print_r($book);
?>
        
        <br>
        <?php
        
        
$letters= ["a", "b", "c"];
print_r($letters);
    foreach ($letters as $l) {
        echo "$l \n";
}
?>
        
        <br>
        <?php
$bookOne = [
    "title" => "Moby Dick",
    "author" => "Melville",
    "theme" => "Revenge"   
    ];

        print_r($bookOne);
   
    foreach ($bookOne as $key => $value) {
        echo "$key - $value\n";
       
        }
        
        ?>

        <br>
    <?php

        $numbersOne = [1,2,3,4,5,6,7,8,9,10];
        print_r($numbers);

        $total = 0;
        foreach ($numbersOne as $no) {
         $total = $total + $no;
        }
        echo "Total = $total\n";
?>
        <br>
        <?php
        echo "Hello". "World";
        ?>
        <br/>
        <?php
        echo "Hello\n" . "World\n";
        ?>

    </body>
</html>
