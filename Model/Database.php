!
<?php


define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'video_sharing');




function conection()
{
    $conn = new mysqli(DB_Host, DB_User, DB_PASS, DB_NAME);
    if ($conn->connect_error) {
        die('Connection Failed' . $conn->connect_error);
    }
  return $conn;
}
?>