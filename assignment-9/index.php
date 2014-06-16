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
            html{
                padding-left: 50px;
            }
            img {
                max-width: 200px;
            }
            div{
                padding-top: 250px;
            }
            a {
                font-size: 40pt;
            }
        </style>
    </head>
    <body>
        <?php
        include_once './Bus.php';

        $bus = new Bus();
        ?>


        <h4>Compulsion to watch movie while executing assignment: CHECK!</h4>
        <img src="http://i.imgur.com/EAu1T.jpg">
        <br>
        <img src="http://www.film.com/wp-content/uploads/2010/09/31770821-31770824-large.jpg">
        <h2>'Pop Quiz Hot Shot'</h2>
        <h2>Bus No. 2525</h2>
        <img src="http://upload.wikimedia.org/wikipedia/commons/8/81/GM_1970s_bus_1_3_(247694123).jpg">
        <br>
        <p>Annie makes Sam stop for her.</p> 
        <h1>
            Speed:  
            <?php
            $bus->setSpeed(0);
            echo $bus->getSpeed();
            ?>
        </h1>
        <h2><?= $bus->isArmed(); ?></h2>    

        <a href="#accelerate1">Try Me?</a>
        <a href="boom.php">Try Me?</a>
     
        <a name="accelerate1"></a>
            
            
        <div>
        <h1>
            Speed: 
            <?php
            $bus->setSpeed(20);
            echo $bus->getSpeed();
            ?> </h1>
        <h2><?= $bus->isArmed(); ?></h2>    
        <img src="http://static.flickr.com/104/281532760_cd76010a9a_m.jpg">
        
     </div> 
           
        <a href="#accelerate2">Try Me?</a>
        <a href="boom.php">Try Me?</a>
     
     
       <div>
       <a name="accelerate2"></a>
           <h1>
            Speed:
            <?php
            $bus->setSpeed(55);
            echo $bus->getSpeed();
            ?>
        </h1>
        <h2><?= $bus->isArmed(); ?></h2>    

        <img src="http://2.bp.blogspot.com/-zHOlBZZtVZQ/TrbuLpmdssI/AAAAAAAAU4E/uPfPOFWPXYQ/s1600/Speed_077Pyxurz.jpg">

        <p>Exit Freeway because of traffic jam.</p>
        <p>Hit Baby Tram Full of Cans <i>thank god upon realization</i></p>
        <p>Get on Abandoned Freeway<i> realize there is a reason it is abandoned</i></p>       
        </div> 
        
        <a href="#accelerate3">Try Me?</a>
        <a href="boom.php">Try Me?</a>
      
        <div>
        <a name="accelerate3"></a>
        <p>'MAC WE GOT A PROBLEM...50' AT LEAST!' </p>
        <h2> Accelerate to jump gap</h2>
        <h1>
            Speed:
            <?php
            $bus->setSpeed(80);
            echo $bus->getSpeed();
            ?>
        </h1>
        <h2><?= $bus->isArmed(); ?></h2>    
        <img src="http://spiff.rit.edu/classes/phys369/workshops/w3a/speed_bus/gap_label.gif">
        </div>
        <a href="#accelerate4">Try Me?</a>
        <a href="boom.php">Try Me?</a>
        <div>
        <a name="accelerate4"></a>
        <h4>Exit to airport</h4> 
        <p>Do laps on empty runway at LAX <i>is an empty runway even possible there?</i></p>
        <p>Lose your cool because '<i>madman</i>' kills your bff.</p>
        <p>Unload passengers behind said madman's back.</p>
        <p>Lose control of bus</p>
        </div> 
        <h1>
            Speed:
            <?php
            $bus->setSpeed(50);
            echo $bus->getSpeed();
            ?>
        </h1>
        <h2><?= $bus->exploded(); ?></h2>    

        <img src="http://www.thehollywoodnews.com/wp-content/uploads/Bus.jpg">
        <p>Madman realizes he has been duped hit's button after bus has exploded.</p>
        <p>Kidnaps girlfriend <i>wouldn't be Hollywood if he didn't</i>.</p>




        <h4>Execution of assignment takes twice as long given previous compulsion: CHECK!</h4>
        <iframe width="560" height="315" src="//www.youtube.com/embed/bESibXv_gf8?rel=0" frameborder="0" allowfullscreen></iframe>
    </body>
</html>
