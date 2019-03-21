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
            <a href="Downloads.html">Downloads</a>
            <a href="Slides.html">Slides</a>
            <a href="Games.html">Games</a>
        </nav>
    
    <div class="container">
      <h1 class="leadItem">Reca 398</h1>
      <h2 class="subLeadItem">Slides</h2>
      <img src="Slides/Lecture3_1.jpg">

     

    </div>
  </body>
</html>