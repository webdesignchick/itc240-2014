<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Assignment 4</title>
        
        <style>
            table {border: 1px solid black}
            td {border: 1px solid black;
            padding: 5px}
            </style>
    </head>
    <body>
        <?php
      
        include 'include/password.php';
        
        $mysql = new mysqli( "localhost", "etacke01", $mysql_password, "etacke01");
        
        /* check connection */
        //if (mysqli_connect_errno()) {
        //printf("Connect failed: %s\n", mysqli_connect_error());
        //exit();}
        
               
               
       $result = $mysql->query('SELECT * FROM comicHero');
       
      
       
        
    
//$result = $mysql->query('SELECT * FROM comicHero()');
   
                ?>
        <table>
           
            <tr>
                <th>Name</th>
                <th>Alias</th>
                <th>Origin</th>
                <th>Relationship</th>
                <th>Nemesis</th>
                <th>Id</th>
            </tr>
            <tr>
                <?php  foreach ( $result as $show ){
            
       ?>
            <td><?=$show["name"]?></td>
            <td><?=$show["alias"]?></td>
            <td><?=$show["origin"]?></td>
            <td><?=$show["archnemesis"]?></td>
            <td><?=$show["girl"]?></td>
            <td><?=$show["id"]?></td>

            </tr>
<?php
    }?>

        </table>

    </body>
</html>