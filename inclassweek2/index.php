<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php 
        $name = htmlentities($_REQUEST["name"]);
        if ($name == "Ellen") {
            $name = "EXHAUSTED";
        }
        //SANITIZATION:
        //HTMLENTITES ()
        if (isset($_REQUEST ["last_name"])){
        $last_name =$_REQUEST ["last_name"];
        }
        else {
            $last_name = "";                
        }

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>4/15/2014</title>
    </head>
    <body>
        
      
        Hello, <?php echo $name;?>
        <?= htmlentities($last_name);    ?>!
        <form method="post">
            <input name="comment"/>
            <input type="hidden"value="123"name="nonce"/>
            <button> Submit </button>
            
            <?php

            if (isset($_REQUEST ["nonce"])){
            
                echo $_REQUEST["comment"];
            }
            ?>
            
        
        
        
        </form>
    </body>
</html>
