<?php
require_once("config.php");

$id = $_GET['id'];
$game = $_GET['game'];
$record  = $_GET['record'];

$sql = "UPDATE archII_table SET record".$game."=".$record." WHERE id=".$id;
$result = $conn->query($sql);
$conn->close();
?>
