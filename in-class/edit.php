<?php
include 'password.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$query='insert into tracker_food (calories,type,eaten_on) VALUES (?,?,NOW());';
$prepared = $mysql->prepare ($query);
$prepared->bind_param("is", $_REQUEST["calories"],$_REQUEST["type"]);
$prepared->execute();

header("Location: index.php");
?>