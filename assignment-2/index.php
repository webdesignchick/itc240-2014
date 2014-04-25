       <?php
     // $page_title =  ["We're all MAD here!"];
      include 'include/head.php';

       ?>
 <?php
        $method = $_SERVER ["REQUEST_METHOD"];
        echo $method;
                
               if ($method == "GET"){            
        ?>
   
        <form method="post">
            Verb
            <input name="verbOne" placeholder="word ending in ...ing">
            Noun
            <input name="nounOne" placeholder="name of pet">
            Time
            <input name="time" placeholder="time of day">
            Noun
            <input name="nounTwo" placeholder="friend's name">
            Adjective
            <input name="adjectiveOne" placeholder="describe">
            Noun
            <input name="nounThree" placeholder="name an emotion">
            Verb
            <input name="verbTwo" placeholder="word ending in ...ing">
            Adjective
            <input name="adjectiveTwo" placeholder="pick another tone">
            Number
            <input name ="numberOne" placeholder="Pick a number">
            Number
            <input name ="numberTwo" placeholder="number between 1 & 12">
              <button> Make me laugh! </button>
               <?php
        } else {
        ?>
            <pre> <?php print_r ($_REQUEST);?>
            </pre>
        <?=$_REQUEST["verbOne"]; 
            ?> down 
        <?=$_REQUEST["nounOne"]; 
            ?> Street at
        <?=$_REQUEST ["time"];
            ?>.
        <?=$_REQUEST ["nounTwo"];
            ?> hollered across the way.  "What are you doing?" 
            <br>"I was
        <?=$_REQUEST["verbOne"]; 
            ?> It makes me feel 
        <?=$_REQUEST ["adjectiveOne"];
            ?>
        <?=$_REQUEST ["nounThree"];
            ?>"
            <br>
            "Why don't you try 
        <?=$_REQUEST["verbTwo"]; 
            ?> instead? I have heard it is 
        <?=$_REQUEST ["adjectiveTwo"];
            ?>
        <?=$_REQUEST ["nounThree"];
            ?>""
            <br>    
        <?php if ($_REQUEST["numberOne"] >10) {
                echo "I don't think so I am going to go to get some sleep.";
            } 
            else {
                echo "Definitely that is a great idea I will meet you in an hour.";
            }
?>
        <?php if ($_REQUEST["numberTwo"] == 11) {
                echo "and they lived Happily ever after.  The End";
            }
            else { 
                echo " To be continued...";
            }

            
        ?>
            <br>
        <a href="index.php">Was that funny? Want to try again?</a>
        <?php
        }
        ?>

    
            <?php include 'include/footer.php';
        ?>
