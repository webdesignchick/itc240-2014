<?php
include 'password.php';
$query='INSERT INTO kittyWorkout (activity, calories, entry) VALUES (?,?,NOW());';
$prepared = $mysql->prepare ($query);
$prepared->bind_param ("si", $_REQUEST["activity"], $_REQUEST["calories"]);
$prepared->execute();

header("Location:index.php");

