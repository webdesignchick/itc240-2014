<?php
include 'top.php';
 
foreach ($result as $libraryShow) {
            // $show made sense to me but i was critiqued on my last assignment as I am showing the result of library
            
?>
        
        <img class="coverImg" src=<?= htmlentities($libraryShow["cover"])?>
                    <ul>
                        <li class="defineTitle"><?= htmlentities($libraryShow["book"])?></li>
                        <li class="defineAuthor"><?= htmlentities($libraryShow["author"])?></li>
                    </ul>
             <p class="excerpt excerpt:firstline"><?= htmlentities($libraryShow["about"])?></p>
      
        <button id="checkout">Checkout </button>
        <br>
        <br>
    
<?php
}
?>

        
    </main>
    <footer>
        <h3>Happy reading!</h3>
        See you next time.
        <br>

        <a href="functions.php?theme=light">View Light Scheme</a><a href="functions.php?theme=dark">View  Dark Scheme</a>
    </footer>

</body>
</html>