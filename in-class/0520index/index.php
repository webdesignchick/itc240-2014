<!doctype html>
<html>
<head>
    
</head>

<body>
    

    <form method="POST" action="edit.php">
    <input type="text" name="type">
    <input type="number" name="calories">
    <input type="submit" name="submit">
</form>
    <?php
    include 'password.php';
    
    
    $column = "calories";
    if (isset($_REQUEST["sort"])){
    $column = $_REQUEST["sort"];
    }
    $column = $mysql->real_escape_string($column);
   // echo $column;
    //$prepared = $mysql->prepare('SELECT * FROM tracker_food');
    //$prepared = $mysql->prepare('SELECT * FROM tracker_food ORDER BY calories DESC;');

    $prepared = $mysql->prepare("SELECT * FROM tracker_food ORDER BY $column DESC;");
    $whitelist = [
        "calories" => true,
        "id" => true,
        "type" => true
    ];
    
    
    if (!isset($whitelist[$column])){
        //error
        $column='calories';
        
    
    }
    $prepared->execute();
    $results = $prepared->get_result();
    
        ?>
    
    
    <h3>What you ate:</h3>
    <table>
        <tr>
            <th>Entry Order</th>
            <th>Calories</th>
            <th>Type</th>
        </tr>
        <tr>
<?php
    foreach ($results as $row) {
?>
            <td><?= htmlentities($row["id"])?></td>
            <td><?= htmlentities($row["calories"])?></td>
            <td><?= htmlentities($row["type"])?></td>
            
        </tr>   
  <?php
  }
  ?>      
    </table>
  
    <br>
    <br>
     <a href="?sort=type">Type</a>
    <a href="?sort=id">Entry Order</a>
    <a href="?sort=calories">Calories</a>
    
    
    <?php 
    
    $sumQuery = $mysql->prepare ('SELECT SUM(calories) AS sum FROM tracker_food;');
    $sumQuery->execute();
    $sumResult = $sumQuery->get_result();
    
    $sum = $sumResult->fetch_array ();
    
    $maxQuery = $mysql->prepare ('SELECT MAX(calories) AS calories FROM tracker_food WHERE calories <500;');
    $maxQuery->execute();
    $maxResult = $maxQuery->get_result();

    $max = $maxResult->fetch_array ();
     
    $countResult=$mysql->query('SELECT COUNT(*) AS rows FROM tracker_food;');
    $count = $countResult->fetch_array ();
    ?>
    <a href="?sort=type">Type</a>
    <a href="?sort=id">Entry Order</a>
    <a href="?sort=calories">Calories</a>
    
    <div>Your total caloric intake is.
    <?= $sum["sum"]?>
    </div>
    <div>Your max caloric intake was:
    <?= $max["calories"]?>
    </div>
    <div>Total number of entries:
    <?= $count["rows"]?>
    </div>
    
    </body>
</html>