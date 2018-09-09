<?php 

// other way, more proper
// 1. Make a db array with these element
$db['db_host'] = 'localhost';
$db['db_user'] = 'root';
$db['db_pass'] = '';
$db['db_name'] = 'cms';
// 2. Loop through the array to uppercase and convert all keys to constants
foreach($db as $key => $value) {
	define(strtoupper($key), $value);
}


$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);


// $connection = mysqli_connect('localhost', 'root', '', 'cms'); // Connection to server

// if($connection) {
// 	echo "We are connected";
// }

?>