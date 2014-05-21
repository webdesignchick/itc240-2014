<?php

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
                <td><?= htmlentities($show["who"])?></td>
                <td><?= htmlentities($show["location"])?></td>
                <td><?= htmlentities($show["spent_on"])?></td>
                <td><?= htmlentities($show["cost"])?></td>
                <td><?= htmlentities($show["why"])?></td>
                <td><?= htmlentities($show["entry"])?></td>
                
            <?php
                }
    $sumQuery = $mysql->prepare ('SELECT sum(cost) AS total FROM receiptTracker');
    $sumQuery->execute();
    $sumResult = $sumQuery->get_result();
    
    $sum = $sumResult->fetch_array ();
    
?>                    
            </tr>
            <tr>
                <th> </th>
                <th> </th>
                <th> </th>
                <th><?= $sum['total'] ?></th>
                <th> </th>
                <th> </th>
            </tr>
</table>

        <br>
        <br>
        <br>