<?php 
    include 'include/head.php';

$comicHero = [
    ["name" => "Tony Stark", "alias" => "Iron Man",  "origin" => "1963"],
    ["name" => "Steve Rodgers", "alias" => "Captain America",  "origin" => "1941"],
    ["name" => "Bruce Banner", "alias" => "Hulk", "origin" => "1962"],    
    ["name" => "Thor Odinson", "alias" => "Thor", "origin" => "1951"],
    ["name" => "Peter Parker", "alias" => "Spiderman", "origin" => "1962" ],
    ["name" => "Clint Barton", "alias" => "Hawkeye", "origin" => "1964" ],
    ["name" => "Natalia 'Natalia 'Alianovna Romanova", "alias" => "Black Widow", "origin" => "1964"],
    
    ];


$show = "all";
if (isset($_REQUEST["show"])){
    $show = $_REQUEST["show"];
}
else {  include 'main.php'; 
}
include 'include/footer.php';
?>