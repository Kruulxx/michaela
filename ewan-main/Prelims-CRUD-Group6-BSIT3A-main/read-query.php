<?php 
include "db.conn.php";

$selectquery="select * from peopletable";
$result=mysqli_query($GLOBALS ['conn'], $selectquery);
