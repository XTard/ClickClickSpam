<?php
require_once "mysql.php";
$query = "select sp, xp from " . $table . " where id='1'";
$result = mysqli_query($mysql, $query);
$row = mysqli_fetch_assoc($result);
$new_points = $row["sp"] + 1;
$query = "update ". $table ." set sp = '" . $new_points . "' where id = '1'";
$result = mysqli_query($mysql, $query);
?>
