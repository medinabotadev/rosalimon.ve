<?php
$connection = new mysqli('localhost', 'root', '751602', 'rosalimonve');

if($connection->connect_error){
    die("Connection failed: " . $connection->connect_error);
} else {
    // echo "Success connection";
}
?>