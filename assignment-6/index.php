<!DOCTYPE html>
<html>
    <head>
        <style>
            table {border: 1px solid #44484d;
                    padding: 3px;}
            tr {border: 1px solid #0fd321;
            padding: 3px;}
        </style>
        
    </head>
    
    <body>
        

<?php
include 'password.php';
$column = "entry";
if (isset($_REQUEST["sort"])){
$column = $_REQUEST["sort"];
}
$column = $mysql->real_escape_string($column);

$prepared= $mysql->prepare("SELECT * FROM kittyWorkout ORDER BY $column ASC;");
$whitelist =[
    "calories" =>TRUE,
    "entry"=> TRUE,
    "activity"=> TRUE    
];
if (isset($whitelist[$column])){
    $column='activity';
    
    $prepared->execute ();
    $result = $prepared-> get_result();
    
}
?>

<h3>Input Neko's Activities</h3>
<form method="POST" action="entry.php">
    <input type="text" name="activity" placeholder="Activity">
    <input type="number" name="calories" placeholder="Calories">
    <input type="submit">  
</form>
<h3>View Neko's Activities</h3>
<a href="?sort=calories">Sort Entries By Calories</a>
<a href="?sort=entry">Sort Entries By Entry</a>
<a href="?sort=activity">Sort Entries By Activity</a>
<table>
    <tr>
        <th>When</th>
        <th>Activity</th>
        <th>Calories Burned</th>
        
    </tr>
    
    <tr>
    <?php 
    
    foreach ($results as $show) {
    
    ?>
    <td><?= htmlentities($show["entry"])?></td>       
    <td><?= htmlentities($show["activity"])?></td>       
    <td><?= htmlentities($show["calories"])?></td>       
    
    </tr>
<?php
}

    $sumQuery=$mysql->prepare('SELECT SUM(calories)as sumCal FROM kittyWorkout');
    $sumQuery->execute();
    $sumResult= $sumQuery->get_result;
    $sum=$sumResult->fetch_array();
    
    $maxQuery=$mysql->prepare('SELECT MAX(calories)as maxCal FROM kittyWorkout');
    $maxQuery->execute();
    $maxResult= $maxQuery->get_result;
    $max=$maxResult->fetch_array();
    
    $countResult=$mysql->query('SELECT COUNT(*) as rows FROM kittywWorkout;');
    $count=$countResult->fetch_array();
    ?>
    <tr>
        <th colspan="2">
            Number of Activities
        </th>
        <th>
           <?= htmlentities($count["rows"])  ?> 
        </th>
        
           <th colspan="2">
            Total Calories Burned
        </th>
        <th>
           <?= htmlentities($sum["sumCal"]) ?> 
        </th>
        
    </tr>    
    <tr>
        <th colspan="2">
            Max Calories Burned
        </th>
        <th>
           <?= htmlentities($max["maxCal"]) ?> 
        </th>
    </tr>    
    
</table>

<?php



?>
<!--
<h3>Total Calories Burned</h3>
<p>
    
</p>
<h3>Max Calories Burned</h3>
-->