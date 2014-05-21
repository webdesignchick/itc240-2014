<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Assignment 5 page 1</title>
        
        <style>
            table {border: 1px solid black}
            td {border: 1px solid black;
            padding: 5px}
            </style>
    </head>
    <body>
        <?php
      
        include 'password.php';
        
        
        /* check connection */
        //if (mysqli_connect_errno()) {
        //printf("Connect failed: %s\n", mysqli_connect_error());
        //exit();}
        
               
               
       $result = $mysql->query('SELECT * FROM receiptTracker');
        
        
        ?>

        <table>
            <tr>
                <th>Name of Transactor</th>
                <th>Transaction Location</th>
                <th>Date of Transaction</th>
                <th>Cost</th>
                <th>Reason for Expense</th>
                <th>Date Entered</th>
            </tr>
            <tr>
                <?php 
                foreach ($result as $show) {
?>
                <td><?= $show["who"]?></td>
                <td><?= $show["location"]?></td>
                <td><?= $show["spent_on"]?></td>
                <td><?= $show["cost"]?></td>
                <td><?= $show["why"]?></td>
                <td><?= $show["entry"]?></td>
                 
            </tr>
            
            <?php
                }
?>                   
            
            
            
            
            
            
            
            
        </table>
        <br>
        <br>
        <br>
        <br>
        <a href="insert.php">Add Another Transaction</a>
             <a href="displaytotals.php">Totals</a>
    </body>
        </html>
