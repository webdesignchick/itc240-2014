

<?php


$books = [
[ "title" => "Samson's Lovely Mortal", "author" => "Tina Folson" ],
[ "title" => "The Witness", "author" => "Nora Roberts"],
[ "title" => "The Forgotten", "author" => "David Baldacci"],

];

$books []= [ "title" => "Rule", "author" =>"Jay Crownover"];

$show = "all";
if (isset($_REQUEST["show"])){
    $show = $_REQUEST["show"];
}


include('424page.php');
