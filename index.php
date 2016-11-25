<?php
require "mysql.php"; 
?>
<html>
<head>
<title>Click-Click-Spam</title>
<link rel='icon' href='/ClickClickSpam/icon.gif'>
<link rel='stylesheet' href='custom.css'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>
<script>
$(document).ready(function() { //Refresh the points
  setInterval(function() {
    $('.body-points-div-refresh').load('refreshPoints.php');
  }, 100);
});

$(document).ready(function() { //Auto points
  setInterval(function() {
    $('.body-points-div-autoPoints').load('autoPoints.php');
  }, 1000);
});

$(document).ready(function() { //Add points on clicking the img
  $('.body-points-imgs').click(function()
    {
      $('.body-points-div-clickPoints').load('points.php')
    })
});

$(document).ready(function() { //Img animation
  $('.body-points-imgs').click(function() {
    $('.body-points-imgs').animate({
      height: '200px'
    }, 100, function() {
      $('.body-points-imgs').css('height', '100px');
    });
  });
});
</script>
<div id='menu'>
<a href='../' class='menu-link'>Home</a>&nbsp&nbsp|&nbsp&nbsp<a href='index.php' class='menu-link'>Click-Click-Spam</a>&nbsp&nbsp|&nbsp&nbsp<a href='?page=play' class='menu-link'>PLAY</a>&nbsp&nbsp|&nbsp&nbsp<a href='?page=quests' class='menu-link'>Quests</a>&nbsp&nbsp|&nbsp&nbsp<a href='?page=upgrades' class='menu-link'>Upgrades</a>&nbsp&nbsp|&nbsp&nbsp<a href='?page=xp' class='menu-link'>XP</a>&nbsp&nbsp|&nbsp&nbsp<a href='?page=about' class='menu-link'>About</a>
  <hr class='menu-hr'>
</div>
<div id='body'>
<?php
  if (!isset($_GET["page"]))
  {
     echo "Hello user from ip: " . $_SERVER['REMOTE_ADDR'];
  }
  else
  {
    if ($_GET["page"] == "play")
    {
      echo "
<div class='body-points-div-main'>
  <div class='body-points-div-refresh'>
  </div>
  <div class='body-points-div-autoPoints'>
  </div>
  <div class='body-points-div-clickPoints'>
  </div>
<img class='body-points-imgs' src='/ClickClickSpam/images/sp.png'>
</div>
    ";
    }
    elseif ($_GET["page"] == "quests")
    {

    }
    elseif ($_GET["page"] == "upgrades")
    {
    }
    elseif ($_GET["page"] == "xp")
    {
    }
    elseif ($_GET["page"] == "about")
    {
    echo "
<p>This project has been created on 20/09/2016 by Xtard.<br>Click-Click-Spam&copy (CCS) XTard Inc.<br>Click-Click-Spam is something like a clicker game and you need to earn points by clicking the 'SP' button or just staying online and receiving points every second. :)<br>There will be quests, upgrades and other interesting stuff.<br>The game can be cheated very easy, but we will check the database records and try to catch every kind of cheaters and etc, also soon we will make a system which automatically detects the cheaters and bans them! :)<br>Good luck and happy Click-Click-Spam-ing</p>
    ";
    }
    else
    {
      echo "Invalid page please go back to the main menu.";
    }
  }
mysqli_close($mysql);
?>
</div>
</body>
</html>
