<?php
require_once("config.php");

$id = $_GET['id'];
$game = $_GET['game'];
$record  = $_GET['record'];

$sql = "UPDATE archII_table SET record".$game."=".$record." WHERE id=".$id;
$result = $conn->query($sql);
$conn->close();
?>

<html><body>
<span class="about-stat"><b>49,830</b> subscribers</span>
<span class="about-stat"> &bull; <b>6,560,832</b> views</span>
<br>
<span class="about-stat">Joined May 14, 2009</span>
</body></html>
