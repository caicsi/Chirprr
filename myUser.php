<?php
//Get Name and Username from the account logged in 
//(which will be the default user, fetched from connect.php)

include('connect.php');

//$id = mysql_real_escape_string($_POST["id"]);

$query="SELECT users.name AS 'Name',
        users.username AS 'Username'
        FROM users
        WHERE users.id = $my_ID";
$my_user_info = mysql_query($query);
if (!$my_user_info) {
    echo "Error querying my user info";
}
$my_name = mysql_result($my_user_info, 0, "Name");
$my_username = mysql_result($my_user_info, 0, "Username");


?>