<?php 

 include 'password.php';
     $mysql = new mysqli("localhost", "etacke01", $mysql_password, "etacke01");
   
    ?>
<!doctype HTML>
<html>
    
    <body>
       
        
        <a href="0515edit.php">Click here to comment!</a>
        <div class="comments">
            <?php
            //$select = 'SELECT * FROM guestbook;';
            $select = 'SELECT name, comment, MONTH(posted_on) AS month, YEAR(posted_on) AS year FROM guestbook;';
          
            $prepared = $mysql->prepare($select);
            $prepared->execute();
            $comments = $prepared->get_result();
            
            foreach ($comments as $comment) {
            ?>
            
            <b><?=$comment ["name"]?></b>
            - Posted on: <?=$comment["month"]?>/<?=$comment["year"]?>
            <pre><?=$comment ["comment"]?></pre>
            
            <?php             
                }
            ?>
        </div>
        
        
        
        
        
    </body>
</html>