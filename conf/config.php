<?php
// be careful when changing any thing here

 // change you host name from localhost to yours and database name to yours
$dsn="mysql:host=localhost:3306;dbname=kilogram_helpbox";
// you can set user here
$username="kilogram_kilogram";
// you can set password here
$password="zB-YJ%U3u92o";


$conn = new PDO( $dsn, $username, $password );
 try {  $conn = new PDO( $dsn, $username, $password );  $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION ); } catch ( PDOException $e ) {  echo "Connection failed: " . $e->getMessage(); }


?>
id_rsa
?RK9Tfxd6G2tyt