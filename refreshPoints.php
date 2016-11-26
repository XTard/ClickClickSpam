<?php
include "mysql.php";
$query = "select sp, xp from ". $table ." where id='1'";
$result = mysqli_query($mysql, $query);
$row = mysqli_fetch_assoc($result);
echo "
    <div class='body-points-div'>
      <img class='body-points-img' src='/ClickClickSpam/images/sp.png'>" . $row["sp"] . "
    </div>
    <div class='body-points-div-two'>
      <img class='body-points-img' src='/ClickClickSpam/images/xp.png'>" . $row["xp"] . "
    </div>
";
?>
