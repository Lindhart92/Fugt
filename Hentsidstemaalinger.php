<?php
include("open_mmddb.php"); 
    $source = $_GET['s'];
    $system = $_GET['sys'];

$sql = ' SELECT value';

$sql = $sql . ' FROM iot ';
$sql = $sql . ' WHERE system = "'. $system . '" AND source = "' . $source .'" ';

$sql = $sql . ' Order by id desc limit 1';

$resultat = mysqli_query($conn, $sql);

$jsonArray = array();

while($row = mysqli_fetch_assoc($resultat)){
    
    $jsonArray[] = $row;
    
}

print json_encode($jsonArray);

?>
















