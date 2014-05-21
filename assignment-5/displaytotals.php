<?php
$num_rows = mysql_num_rows($result);

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
                
            <?php
                }
?>                    
            </tr>
            <tr>
                
                <td>Number of Transactions<?="$num_rows Rows\n";?></td>
                <td> </td>
                <td> </td>
                <td> </td>
                
            </tr>