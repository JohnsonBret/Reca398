<?php
session_start();
require_once 'classes/Membership.php';
$membership = new Membership();
$membership->confirmMember();

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">

     <link rel="stylesheet" href="style.css">
    <title>RECA 398 | Games</title>
  </head>
  
  <body>

    <nav>
      <a href="Downloads.php">Downloads</a>
      <a class="marginR" href="Games.php">Games</a>
      <?php
        if($_SESSION["name"])
        {
          echo("<a> " . $_SESSION["name"] . " </a>");
        }
      ?>
      <a href="logout.php">Logout</a>
    </nav>

    <div class="pageTitle">
      <h1 class="leadItem">Reca 398</h1>
      <h2 class="subLeadItem">Games</h2>
    </div>
    
    <div class="container">

        <div class="download">
          <a href="Games/Lucy/GameLucy.html">Lucy</a>
        </div>
        <div class="download">
          <a href="Games/Amanda/GameAmanda.php">Amanda</a>
        </div>
        <div class="download">
          <a href="Games/Tom/GameTom.html">Tom</a>
        </div>
        <div class="download">
          <a href="Games/Cameron/GameCameron.html">Cameron</a>
        </div>
        <div class="download">
          <a href="Games/Sophie/GameSophie.html">Sophie</a>
        </div>

    </div>
  </body>
</html>