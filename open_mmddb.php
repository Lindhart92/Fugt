<?php
$servername = "";
$username = "";
$password = "";
$database = "";

//Opretter forbindelse.
$conn = new mysqli($servername, $username, $password, $database);



if ($conn->connect_error) {
    die("forbindelse mislykkedes:" . $conn->connect_error);
}
?>

