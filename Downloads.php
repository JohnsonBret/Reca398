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
    <title>RECA 398</title>
  </head>
  
  <body>

    <nav>
      <a href="Downloads.php">Downloads</a>
      <a class="marginR" href="Games.php">Games</a>
      <a href="Grades.php">Grades</a>
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
        <h2 class="subLeadItem">Downloads</h2>
    </div>
    
    <div class="container">
      
      <div class="left download">
        <a class="" href="SYLLABUS_RECA398_2019.docx" download="SYLLABUS_RECA398_2019.docx">Lecture 1</a>
      </div>
      <div class="center download">
        <a class="" href="Lecture2.php" >Lecture 2<img src="MarbleLecture.png" alt="">Marble Game</a>
      </div>

      <div class="right download">
        <a class="" href="Lecture3.php" >Lecture 3<img src="MarbleLecture.png" alt="">Marble Game</a>
      </div>

      <div class="left download">
        <a class="" href="Lecture4.php" >Lecture 4<img src="Lecture4Img/bridge.png" alt="">Bootcamp Environment</a>
      </div>

      <div class="center download">
        <a class="" href="Lecture5.php" >Lecture 4<img src="Lecture4Img/bridge.png" alt="">Bootcamp Environment</a>
      </div>

      <?php
      // <!-- <a class="download" href="Lecture3.zip" download="Lecture3.zip">Lecture 3</a>
      // <a class="download" href="Lecture5.zip" download="Lecture5.zip">Lecture 5</a>
      // <a class="download" href="Lecture7/Lecture7.html">Lecture 7</a>
      // <a class="download" href="Lecture9/Lecture9.html">Lecture 9</a>
      // <a class="download" href="Lecture10/Lecture10.html">Lecture 10</a>
      // <a class="download" href="Lecture11/Lecture11.html">Lecture 11</a>
      // <a class="download" href="Lecture12/Lecture12.html">Lecture 12</a>
      // <a class="download" href="Lecture13/Lecture13.html">Lecture 13</a> -->
      ?>
    </div>
  </body>
</html>