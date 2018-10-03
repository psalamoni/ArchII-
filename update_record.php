<?php
require_once("config.php");

$id = $_GET['id'];
$game = $_GET['game'];
$record  = $_GET['record'];

$ratual1 = "SELECT record".$game." p FROM users WHERE id=".$id;
$ratual2 = $conn->query($ratual1);

$column = $ratual2["p"];
echo $column;

if ( $column >= $record) {
	$sql = "UPDATE users SET record".$game."=".$record." WHERE id=".$id;
	//$result = $conn->query($sql);
}
$conn->close();
?>
<html><body>
<span class="about-stat"><b><? echo $column ?></b> subscribers</span>
<span class="about-stat"> &bull; <b>6,560,832</b> views</span>
<br>
<span class="about-stat">Joined May 14, 2009</span>
</body></html>