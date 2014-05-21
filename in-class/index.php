<!doctype html>
<html>
<head>
    
</head>

<body>
    

    <?php
    include 'password.php';
    
    $prepared = $mysql->prepare('SELECT * FROM tracker_food');
    $prepared->execute();
    $results = $prepared->get_result();
    
        ?>
    <h3>What you ate:</h3>
    <table>
        <tr>
            <th>Calories</th>
            <th>Type</th>
            <th>Entry No.</th>
        </tr>
        <tr>
<?php
    foreach ($results as $row) {
?>
            <td><?= htmlentities($row["id"])?></td>
            <td><?= htmlentities($row["calories"])?></td>
            <td><?= htmlentities($row["type"])?></td>
            
        </tr>   
        
    </table>
    
    
    <?php 
    }
    $sumQuery = $mysql->prepare ('SELECT sum(calories) AS Sum FROM tracker_food');
    $sumQuery->execute();
    $sumResult = $sumQuery->get_result();
    
    $sum = $sumResult->fetch_array ();
    
    
    
    ?>
    <div>Your total caloric intake is.
    <?= $sum["sum"]?>
    </div>
    
    </body>
</html>