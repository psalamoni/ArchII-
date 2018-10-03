<?php
require_once("config.php");

$id = $_GET['id'];
$game = $_GET['game'];
$record  = $_GET['record'];

$ratual1 = "SELECT record".$game." FROM users WHERE id=".$id;
$ratual2 = $conn->query($ratual1);
$conn->close();

$column = $ratual2["record".$game];

if ( $column <= $record) {
	$sql = "UPDATE users SET record".$game."=".$record." WHERE id=".$id;
	$result = $conn->query($sql);
	$conn->close();
}


?>