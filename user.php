<?php
//Get Name and Username from the account logged in 
//(which will be the default user, fetched from connect.php)

include 'connect.php'

//$id = mysql_real_escape_string($_POST["id"]);

$query="SELECT users.name AS Name,
        users.username AS Username
        FROM users
        WHERE users.id = $myId";
$userInfo = mysql_query($query);
$


?>