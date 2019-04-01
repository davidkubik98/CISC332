<?php
$host       = "localhost";
$username   = "David";
$password   = "hello";
$dbname     = "conference";
$dsn        = "mysql:host=$host;dbname=$dbname";
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );
?>