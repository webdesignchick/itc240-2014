<?php

if (isset($_GET['theme'])) {
    if ($_GET['theme'] == 'light') {
        setcookie(cssTheme, 'light', time() + 10 * 60, "/");
        redirectTo('index.php');
    } elseif ($_GET['theme'] == 'dark') {
        setcookie(cssTheme, 'dark', time() + 10 * 60, "/");
        redirectTo('index.php');
    }
}



if (isset($_GET['sort'])) {
    if ($_GET['sort'] == 'bookAsc') {
        setcookie(sort, 'bookAsc', time() + 10 * 60, "/");
        redirectTo('index.php');
    } elseif ($_GET['sort'] == 'authorDesc') {
        setcookie(sort, 'authorDesc', time() + 10 * 60, "/");
        redirectTo('index.php');
    }
}

function redirectTo($loc) {
    header("Location: " . $loc);
    exit;
}

function cssTheme() {
    //echo "testing123"; working
    if (isset($_COOKIE['cssTheme'])) {
        //echo "hey";
        if ($_COOKIE ['cssTheme'] == 'light') {
            return 'css/light.css';
        } else {
            return 'css/dark.css';
        }
    }
}

function getLibrary() {
    global $mysql;

    if (isset($_COOKIE['sort'])) {
        if ($_COOKIE['sort'] == 'bookAsc') {
            return $mysql->query('SELECT * FROM library ORDER BY book ASC');
        } elseif ($_COOKIE['sort'] == 'authorDesc') {
            return $mysql->query('SELECT * FROM library ORDER BY author DESC');
        }
    } else {
        return $mysql->query('SELECT * FROM library');
    }
}
