<h3>some of the</h3>
        <h1>Avengers</h1>
        <a href="?show=all"> List View &nbsp; </a> 
     <!--      <a href="?show=image"> Image View </a>--> 
        <a href="?show=girls"> The 'Girls' &nbsp;</a>
        <a href="?show=links"> More Information &nbsp;</a>
 
        <ul>
            
            <?php
            
            
            
            foreach ($comicHero as $hero) {
                if ($show == "image") {
                    include ("images.php");
                } 
                else if ($show == "girls") {
                include ("thegirls.php");          
                }        
                else if ($show == "links") {
                include ("links.php");
                 }
                 else 
                     include ("lines.php");
       
            }
            
            ?>
        </ul>
       