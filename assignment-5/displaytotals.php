<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Assignment 5 page 2</title>
        
        <style>
            
            </style>
    </head>
    <body>
            <h3>What time period do you want to look at? </h3>
            <form method="POST">
            <input type="text" name="spent_on" placeholder="YYYY-MM">
            <input type="submit">
            </form>


            <?php

//            if ($_SERVER["REQUEST_METHOD"] == "POST"){
//            $result = $mysql->query('SELECT cost FROM receiptTracker WHERE spent_on is MONTH(spent_on) AS month, YEAR(spent_on) AS year  ');
//                
//            };

   $result = $mysql->query('SELECT spent_on, cost FROM receiptTracker');
  
       // if (isset($result)) {
                    
    $sumQuery = $mysql->prepare ('SELECT sum(cost) FROM receiptTracker');
    $sumQuery->execute();
    $sumResult = $sumQuery->get_result();
    
    $sum = $sumResult->fetch_array ();
         //       };
  ?>
    
    <?php 
    foreach ($result as $show) {
?>
            <h3>Totals for Month Selected</h3> 
           
            <div><?= htmlentities($sum['sum(cost)']) ?></div>
                

        <br>
        <br>
        <?php
       }
       ?>
        </table>
    </body>
</html>