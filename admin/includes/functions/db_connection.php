<?php
$connection = new mysqli('localhost', 'root', '', 'rosalimonve');

if($connection->connect_error){
    die("Connection failed: " . $connection->connect_error);
} else {
    // die("Success connection");
}
?>