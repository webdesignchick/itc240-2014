<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Assignment 4 via FTP</title>
    </head>
    <body>
        <?php
        include 'include/array.php';
        include 'include/password.php';
        
        $mysql = new mysqli( "localhost", "etacke01", $mysql_password, "etacke01");
        
        
        $result = $mysql->query('SELECT * FROM comicHero;');
      
        
    INSERT INTO comicHero (name, alias, origin, girl, archnemesis) 
        VALUES  (Tony Stark, Iron Man, 1963, Mandarin, Pepper Pots, 1),
                (Steve Rodgers, Captain America, 1941, Red Skull, Sharon Carter, 2),
                (Bruce Banner, Hulk, 1962, Tyrannus, Betty Ross, 3),
                (Thor Odinson, Thor, 1951, Loki, Sif, 4),
                (Peter Parker, Spiderman, 1962, Green Goblin, Gwen Stacy, 5),
                (Clint Barton, Hawkeye, 1964, Assassin, Barbara 'Bobbi' Barton: Mockingbird, 6),
                (Natalia Alianovna Romanova, Black Widow, 1964, Alexi Shostakov: Red Guardian, 7);


                 ?>
        <table>
            <?php
            foreach ($result as $row) {
                ?>
            <tr>
                <td><?=$row["type"] ?>
                <td><?=$row["origin"]?>
           
             <?php
            }
            
                ?>
        </table>
    </body>
</html>
