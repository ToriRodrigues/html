<?php
/**mysql_connect is deprecated
 * using mysqli_connect instead
 */

$databaseHost = 'localhost';
$databaseName = 'crud';
$databaseUserame = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseName, $databaseUserame, $databasePassword);
?>