<?php
$host = "35.198.6.145";
$userName = "archII";
$password = "rootroot";
$dbName = "archII";
 
// Create database connection
$conn = mysqli_connect($host, $userName, $password, $dbName);
 
// Check connection
if (mysqli_connect_errno()) {
die("Connection failed: " . mysqli_connect_error());
}

$id = $_GET['id'];
$game = $_GET['game'];
$record  = $_GET['record'];

$sql = 'SELECT record'.$game.' p FROM users WHERE id='.$id;
$result=mysqli_query($conn,$sql);
$result1 = mysqli_fetch_assoc($result);
$column = $result1["p"];
 
if ( $column <= $record) {
	$sql = "UPDATE users SET record" . $game . "=" . $record . " WHERE id=" . $id;
	$result = mysqli_query($conn, $sql);
}
$conn->close();
?>
<html><body>
<span class="about-stat"><b><? echo $column; ?></b> subscribers</span>
<span class="about-stat"> &bull; <b>6,560,832</b> views</span>
<br>
<span class="about-stat">Joined May 14, 2009</span>
</body></html>