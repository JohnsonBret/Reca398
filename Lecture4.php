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
        <h2 class="lectureTitle">Lecture 4 - Bootcamp</h2>
        
    </div>

    <h2 class="lectureTitle">Notable Locations</h2>
    <section class="instructionGrid">

        <div class="left">
          <img src="Lecture4Img/forest.png">
        </div>

        <div class="right">
            <h2>The Forest</h2>
            <ul>
                <li>The majority of the level is a forest enviornment.</li>
                <li>What kind of sounds would you expect to hear in a forest?</li>
                <li>What kind of mood do you want to set?</li>
                <li>How might the sounds change to suit the mood you are creating?</li>
            </ul>
        </div>

        <div id="time" class="left">
          <img src="Lecture4Img/bridge.png">
        </div>

        <div class="right">
        <h2>The Bridge</h2>
            <ul>
                <li>The most likely path of the player through the level will include crossing the bridge.</li>
                <li>Pay attention to the sound of the water under the bridge.  A player is likely to explore it.</li>
                <li>What sort of materials are present on the bridge?</li>
                <li>What kind of sounds would they make?</li>
                <li>How much sound is necessary?</li>
                <li>How will the presence or lack of sound change the mood?</li>
            </ul>
        </div>

        <div class="left">
          <img src="Lecture4Img/rapids.png">
        </div>

        <div class="right">
        <h2>Small Rapids</h2>
            <ul>
                <li>Looking left from the bridge a small rapids area can be spotted in the river.</li>
                <li>This area with more activity deserves special attention.</li>
            </ul>
        </div>

        <div class="left">
          <img src="Lecture4Img/waterfall.png">
        </div>

        <div class="right">
        <h2>Waterfall</h2>
            <ul>
                <li>This is the most active piece of the environment.</li>
                <li>If I could only place two sounds on this level this would be one of them!</li>
                <li>How should the sound of the waterfall change over distance?</li>
            </ul>
        </div>

        <div class="left">
          <img src="Lecture4Img/shack.png">
        </div>

        <div class="right">
        <h2>Luxury Shack</h2>
            <ul>
                <li>Mostly likely path of the player would pass by this shack.</li>
                <li>What kind of sounds might emit from this shack?</li>
            </ul>
        </div>

        <div class="left">
          <img src="Lecture4Img/structure.png">
        </div>

        <div class="right">
        <h2>Concrete Structure</h2>
            <ul>
                <li>This is the final area of the environment.</li>
                <li>What sort of materials make up the structure?</li>
                <li>What objects are present that might emit sounds?</li>
            </ul>
        </div>

        <div class="left">
          <img src="Lecture4Img/interior.png">
        </div>

        <div class="right">
        <h2>Structure Interior</h2>
            <ul>
                <li>How should the exterior sounds change when you enter the building?</li>
                <li>How can we change the volumes of groups of sounds?</li>
                <li>How will we know when to make the change?</li>
                <li>Entering this building is the final goal of the level. How is the relevant to the story?</li>
            </ul>
        </div>

        </section>

  </body>
</html>