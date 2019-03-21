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

     <link rel="stylesheet" href="Lecture4Grid.css">
     <title>RECA 398 | Lecture 4</title>
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
      
    <div class="lecture">
        <h2 class="lectureTitle"> <?php
        if($_SESSION["name"])
        {
          echo("" . $_SESSION["name"] . "'s ");
        }
      ?>GRADES</h2>
        
    </div>

    <h2 class="lectureTitle">Assignments</h2>
    <section class="instructionGrid">

        <div class="left">
          <img src="MarbleLecture.png">
        </div>

        <div class="right">
            <h2>CSharp</h2>
            <?php
              $membership = new Membership();
              $grade = $membership->get_user_grades($_SESSION["name"], "csharp");
              printf("<h2> Grade: " . $grade["grade"] . " </h2>");
              printf("<div>" . $grade["comments"] . "</div>");
            ?>
        </div>

        <div id="time" class="left">
          <img src="Lecture4Img/bridge.png">
        </div>

        <div class="right">
            <h2>Bootcamp</h2>
            <?php
              $membership = new Membership();
              $grade = $membership->get_user_grades($_SESSION["name"], "bootcamp");
              printf("<h2> Grade: " . $grade["grade"] . " </h2>");
              printf("<div>" . $grade["comments"] . "</div>");
            ?>
        </div>

        </section>

  </body>
</html>