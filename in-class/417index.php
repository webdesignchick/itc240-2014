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
        
        <style>
            
            
            
        </style>
    </head>
    <body>
        <?php
        $method = $_SERVER ["REQUEST_METHOD"];
        echo $method;
                
               if ($method == "GET"){            
        ?>
   
        <form method="post">
            <input name="first_name" placeholder="Ellen">
            <input name="age" placeholder="Age">
            <input type="checkbox" value="sparking" name="is_sparking">
            <label for="is_sparking"> Are you sparking?
            <button> Burn </button>
        </form>
        <?php
        } else {
        ?>
            <pre> <?php print_r ($_REQUEST);?>
            </pre>
        Your name is: <?=$_REQUEST["first_name"]; 
            ?>
        
        <?php 
        $age = $_REQUEST["age"]; 
        $post_voting = $age- 18;
        if ($post_voting >=0){ 
        ?>
        You have been able to vote for <?= $post_voting ?> years.
        <?php
        } else {?>
        <?php
        }
        ?>
        You are too young to vote.  YOU BIG BABY!
        <?php 
        if (isset($_REQUEST["is_sparking"])) 
        echo "Also, you are sparking."
        
            
   
        ?>
        <a href="417index.php">Ashes</a>
        <?php
        }
        ?>
    
    </body>
</html>
