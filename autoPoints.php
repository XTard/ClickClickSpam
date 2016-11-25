<?php
include "mysql.php";
$query = "select sp, xp from points where id='1'";
$result = mysqli_query($mysql, $query);
$row = mysqli_fetch_assoc($result);
$new_points = $row["sp"] + 1;
$query2 = "update points set sp = '" . $new_points . "' where id = '1'";
$asd = mysqli_query($mysql, $query2);
$query = "select sp, xp from points where id='1'";
$result = mysqli_query($mysql, $query);
$row = mysqli_fetch_assoc($result);
?>
