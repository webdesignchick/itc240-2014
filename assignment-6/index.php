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
include 'edit.php';


?>

<h3>Input Neko's Activities</h3>
<form>
    <input type="text" name="activity" placeholder="Activity">
    <input type="number" name="calories" placeholder="Calories">
      
</form>
<h3>Neko's Activities</h3>
<table>
    <tr>
        <th>When</th>
        <th>Activity</th>
        <th>Calories Burned</th>
        
    </tr>
    
    <tr>
    <? foreach ($results as $show) {
    
    ?>
    <td><?= htmlentities($show["entry"])?></td>       
    <td><?= htmlentities($show["activity"])?></td>       
    <td><?= htmlentities($show["calories"])?></td>       
    
    </tr>
<?php
}
?>
    <tr>
        <th colspan="2">
            Number of Activities
        </th>
        <th>
           <?= //count ?> 
        </th>
        
    </tr>    
    <tr>
        <th colspan="2">
            Total Calories Burned
        </th>
        <th>
           <?= //sum ?> 
        </th>
        
    </tr>    
    <tr>
        <th colspan="2">
            Max Calories Burned
        </th>
        <th>
           <?= //max ?> 
        </th>
        
    </tr>    
    
</table>

<?php



?>
<!--
<h3>Total Calories Burned</h3>
<p>
    Entry Count <?= ?> 
</p>
<h3>Max Calories Burned</h3>
-->