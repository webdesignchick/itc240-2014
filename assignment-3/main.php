
        <h1>Avengers</h1>
        <a href="?show=all"> List View &nbsp; </a> 
       <!-- <a href="?show=image"> Image View </a> 
        <a href="?show=girls"> The 'Girls' &nbsp;</a>
        <a href="?show=links"> More Information &nbsp;</a>
      -->  
        <ul>
            
            <?php
            
            
            
            foreach ($comicHero as $hero) {
                if ($show == "image") {
                    include ("image.php");
                } 
                else if ($show == "girls") {
                include ("thegirls.php");          
                }        
                else if ($show == "links") {
                include ("links.php");
                 }
                }
            
            ?>
        </ul>
       