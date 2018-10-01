<?php
require_once("config.php");

$id = $_GET['id'];

$sql = "SELECT name FROM archII_table WHERE id=".$id;
$result = $conn->query($sql);
$conn->close();

$result_json = array('name' => $result['name'], 'valid' => $valid);

// headers for not caching the results
header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');

// headers to tell that result is JSON
header('Content-type: application/json');

// send the result now
echo json_encode($result_json);
?>
