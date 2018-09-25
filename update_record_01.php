<?php
require_once("config.php");

$id = $_GET['id'];
$rgame1  = $_GET['record_game_01'];

$sql = "UPDATE archII_table SET record=".$rgame1." WHERE id=".$id;
$result = $conn->query($sql);
$conn->close();
?>
