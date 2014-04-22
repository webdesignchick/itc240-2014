       <?php include 'include/head.php';
      $page_title = "We're all MAD here!";

       ?>
 <?php
        $method = $_SERVER ["REQUEST_METHOD"];
        echo $method;
                
               if ($method == "GET"){            
        ?>
   
        <form method="post">
            <input name="verbOne" placeholder="action word ending in ...ing">
            <input name="nounOne" placeholder="name of pet">
            <input name="time" placeholder="time of day">
            <input name="nounTwo" placeholder="friend's name">
            <input name="verbTwo" placeholder="action word ending in ...ing">
            <input name ="numberOne" placeholder="Pick a number">
            <input name ="numberTwo" placeholder="Pick a second number">
              <button> Make me laugh! </button>
               <?php
        } else {
        ?>
            <pre> <?php print_r ($_REQUEST);?>
            </pre>
        <?=$_REQUEST["verbOne"]; 
            ?> down the 
        <?=$_REQUEST["nounOne"]; 
            ?> Street at
        <?=$_REQUEST ["time"];
            ?>.
        <?=$_REQUEST ["nounTwo"];
            ?> hollered across the way.  "What are you doing/" "I was
         
            




        ?>
        <a href="index.php">Was that funny? Want to try again?</a>
        <?php
        }
        ?>

    
            <?php include 'include/footer.php';
        ?>
