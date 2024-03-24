<?php
header("Content-Type: application/json; charset=utf-8");
$con = mysqli_connect("localhost", "root", "", "iplogger");
$result = $con->query("SELECT * FROM log");
$rows = [];
while ($row = $result->fetch_assoc()) {
    $rows[] = $row;
}
echo json_encode($rows);
?>