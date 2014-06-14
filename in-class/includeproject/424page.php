<!doctype html>
<html>
    <head>
        
    </head>
    <body>
        <h1>Books!</h1>
        <a href="?show=cover"> Cover View </a>
        <a href="?show=all"> List View </a>
        <div><?=count($books); ?> Books Available</div>
        <ul>
            
            <?php
            
            
            
            foreach ($books as $book) {
                if ($show == "cover") {
                    include ("424cover.php");
                } 
                else {
                include ("424book.php");
                }        
                }
            
            ?>
        </ul>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
</body>
</html>
