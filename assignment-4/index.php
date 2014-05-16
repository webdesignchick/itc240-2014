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
        include 'include/array3.php';
        include 'include/password.php';
        
        $mysql = new mysqli( "localhost", "etacke01", $mysql_password, "etacke01");
        
        $result = $mysql->query('SELECT * FROM comicHero ORDER BY origin ASC, type ASC;');
       
       
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
