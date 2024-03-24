<?php
$con = mysqli_connect("localhost", "root", "", "iplogger");
$stmt = $con->prepare("INSERT INTO `log` (`ip`, `useragent`) VALUES (?, ?)");
$stmt->bind_param("ss", $_SERVER["REMOTE_ADDR"], $_SERVER["HTTP_USER_AGENT"]);
$stmt->execute();
$stmt->close();
?>
ip: <?= $_SERVER["REMOTE_ADDR"] ?>
<br>
user agent: <?= $_SERVER["HTTP_USER_AGENT"] ?>
<br>
<a href="list.php">view full list</a>
<br>
<a href="erase.php">erase the list</a>