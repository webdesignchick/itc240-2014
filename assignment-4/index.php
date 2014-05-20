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
    </head>
    <body>
        <?php
      
        include 'include/password.php';
        
        $mysql = new mysqli( "localhost", "etacke01", $mysql_password, "etacke01");
        
        /* check connection */
        //if (mysqli_connect_errno()) {
        //printf("Connect failed: %s\n", mysqli_connect_error());
        //exit();}
        
               
       $prepared = $mysql->prepare("INSERT INTO comicHero (name, alias, origin, girl, archnemesis, id)
             VALUES 
                    ('Steve Rodgers', 'Captain America', 1941, 'Red Skull', 'Sharon Carter', '?'),
                    ('Bruce Banner', 'Hulk', 1962, 'Tyrannus', 'Betty Ross', '?'),
                    ('Thor Odinson', 'Thor', 1951, 'Loki', 'Sif', '?'),
                    ('Peter Parker', 'Spiderman', 1962, 'Green Goblin', 'Gwen Stacy', '?'),
                    ('Clint Barton', 'Hawkeye', 1964, 'Assassin', 'Barbara Barton: Mockingbird', '?'),
                    ('Natalia Alianovna Romanova', 'Black Widow', 1964, 'Black Spectre', 'Alexi Shostakov: Red Guardian', '?');");       
   
       $prepared->bind_param("ssissi", 
               $_REQUEST["name"],
               $_REQUEST["alias"],
               $_REQUEST["origin"],
               $_REQUEST["girl"],
               $_REQUEST["archnemesis"], 
               $_REQUEST["id"]);
               
       $prepared->execute();
         $result = $mysql->query('SELECT * FROM comicHero ORDER BY origin ASC, type ASC');
       $mysql->close();
       
      
       
        
    
//$result = $mysql->query('SELECT * FROM comicHero()');
 //print_r($result);
       foreach ( $result as $show ){
           
       }
   
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
            <td><?=$show["name"]?></td>
            <td><?=$show["alias"]?></td>
            <td><?=$show["origin"]?></td>
            <td><?=$show["girl"]?></td>
            <td><?=$show["archnemesis"]?></td>
            <td><?=$show["id"]?></td>

            </tr>
        </table>

    </body>
</html>