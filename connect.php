<?php
//Connects to database 
    $server = "localhost:3306";
    $username = "root";
    $password = "knowlage1";
    $conn = mysql_connect($server, $username, $password);
    if (!$conn) {
        die("Could not connect");
    }
    $chirprr_db = mysql_select_db('twitter', $conn);
    if (!chirprr_db) {
        die('Can\'t find chirper database');
    }
//Default user: do not change!
    $my_ID = 7;
?>