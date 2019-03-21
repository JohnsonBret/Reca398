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

     <link rel="stylesheet" href="Lecture.css">
     <title>RECA 398 | Lecture 2</title>
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
        <h2 class="lectureTitle">Lecture 2 - Marble Game</h2>
        <div class="lectureListContainer">
            <ol class="lectureList">
                <li><a href="#Item1">Move, Rotate, and Scale</a></li>
                <li><a href="#Item2">Duplication</a></li>
                
            </ol>
        </div>

        <div id="Item1">
          <hr>
          <h2>Move, Rotate, and Scale</h2>
          <p>Select the Move tool from the toolbar in the top left hand corner of the editor.</p>
          <img src="Lecture2/UD1_SelectMoveTool.png">
          <p>The Move tool allows us to change the position of Gameobjects in our Scene.</p>

          <p>Select the Rotate tool from the toolbar.</p>
          <img src="Lecture2/UD1_RotateWall1.png">
          <p>The Rotate tool allows us to change the position of Gameobjects in our Scene.</p>

          <p>When the Rotate tool is selected you will see three rotate rings appear on your selected Gameobject.</p>
          <img src="Lecture2/UD1_RotateWall2.png">
          <p>If you click and drag on one of the rotate rings you will rotate the Gameobject in the selected axis.</p>

          <p>If you hold down the control key while you are clicking and dragging on a rotate ring the object will snap in 15 degree increments.</p>
          <img src="Lecture2/UD1_RotateWall3.png">
          <p>This is handy for squaring up walls.</p>

          <p>Select the Scale tool from the toolbar.</p>
          <img src="Lecture2/UD1_SelectTheScaleTool.png">
          <p>This tool allows you to make Gameobjects larger or smaller.</p>

          <p>When the Scale tool is selected you will see 3 colored box icons appear around your selected Gameobject.</p>
          <img src="Lecture2/UD1_ScaleTheFloor.png">
          <p>Clicking and dragging on one of the boxes will allow you to scale the Gameobject in the selected axis.</p>
         
        </div>

        <div id="Item2">
          <hr>
          <h2>Duplication</h2>
          <p>To duplicate a Gameobject select it in the Hierarchy.</p>
          <img src="Lecture2/Duplication.jpg">
          <p>Hold down Ctrl + D to duplicate the object.  (On Mac this might be Command + D)</p>
         
        </div>

        

    </div>
  </body>
</html>