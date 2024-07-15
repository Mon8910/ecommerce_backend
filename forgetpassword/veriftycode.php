<?php
include "../connect.php";

$email = filterRequest("email");
$verify = filterRequest("verifyvode");

$stmt = $con->prepare("SELECT * FROM users WHERE users_email = '$email' AND users_verfiycode = '$verify' ");
$stmt->execute();
$count = $stmt->rowCount();

result($count);
