<?php
$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "Rsmercearia";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die("Alguma coisa está muito errada..");
}
