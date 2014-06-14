<?php
include 'password.php';
include 'functions.php';
$result = getLibrary();





?>
<!doctype HTML>
<html>
    <head>
        <link rel="stylesheet" type="text.css" href="<?php echo cssTheme(); ?>"> 

    </head>

    <body>




        <header>
            <h2>At the Library</h2>

            <ul>
                <li><a href="showCover.php">Go To Cover</a></li>
                <li><a href="functions.php?sort=bookAsc">Book Title</a></li>
                <li><a href="functions.php?sort=authorDesc">Author </a></li>
                <li><a href="description.php">See Description</a></li>
            </ul> 
        </header>
    <main>