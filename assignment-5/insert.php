<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Assignment 5 page 2</title>
        
        <style>
            
            </style>
    </head>
    <body>
   
        <h2>Expense Report Entry Form</h2>
        <form action="insert.php" method="POST">
            <input type="text" name="who" placeholder="Your Name"><br>
            <input type="text" name="location" placeholder="Location of Transaction"><br>
            <input type="text" name="spent_on" placeholder="YYYY-MM-DD"><br>
            $<input type="number" step="any" name="cost" placeholder="XXX.xx"><br>
            Please tell us why this transaction took place. <br>
            Include Mileage if this is a gas receipt<br>
            <textarea rows="3" cols="20" name="why"></textarea><br>
            <!-- Need auto insert of date time through PHP name="timestamp" >
            -->
            <br>
            
            <input type="submit" name="Submit"><br>
            <br>
            <a href="index.php">See Transactions</a>
            <a href="displaytotals.php">Totals</a>
        </form>
     <?php
   include 'password.php';
   
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
       $query = 'INSERT INTO receiptTracker (who, location, spent_on, cost, why, entry) VALUES ( ?, ?, ?, ?, ?, NOW());';
       $prepared = $mysql->prepare($query);
       $prepared->bind_param("sssds", $_REQUEST["who"], $_REQUEST["location"],$_REQUEST["spent_on"], $_REQUEST["cost"],$_REQUEST["why"]);
       $prepared->execute();
       header("Location: index.php");
       
   }
   ?>       
      
        
    </body>
</html>
