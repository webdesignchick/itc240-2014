<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action ="0515edit.php" method="POST">
              <input name="name" placeholder="Your Name!">
            <textarea name="comment"> </textarea>
            <input type="submit">
    
    
    
    </form>
        

     <?php
     include 'password.php';
     $mysql = new mysqli("localhost", "etacke01", $mysql_password, "etacke01");
   
     if ($_SERVER["REQUEST_METHOD"] == "POST"){
       $query = 'INSERT INTO guestbook (name,comment, posted_on)VALUES (?,?, now())';

       $prepared = $mysql->prepare($query);
       $prepared->bind_param("ss", $_REQUEST["name"],$_REQUEST["comment"]);
       $prepared->execute();
       
     }




//  $result = $mysql->query('SELECT now()');
   //  print_r($result);
     
// put your code here
        ?>
    
        <a href="05152014.php">see other's comments</a>
    </body>
</html>
