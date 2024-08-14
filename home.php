<?php
include "connect.php";

$alldata= array();

$cat = getAllData("categories", null,null ,false);
$alldata['categories'] = $cat;
echo json_encode($alldata);
