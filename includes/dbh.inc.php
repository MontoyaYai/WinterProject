<?php
$serverName="localhost";
$dBUsername="root";
$dBpassword="Katsudon99-";
$dBName="winterProject";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if (!$conn){
    die("Not connected : ". mysqli_connect_error());
}