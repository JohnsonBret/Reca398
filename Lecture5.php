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
     <title>RECA 398 | Lecture 5</title>
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
        <h2 class="lectureTitle">Lecture 5 - Bootcamp Environment</h2>
        
    </div>

    <h2 class="lectureTitle">Notable Locations</h2>
    <section class="instructionGrid">

        <div class="left">
          <img src="Lecture5Img/Bridge_1.png">
        </div>

        <div class="right">
            <h2>The Bridge Water</h2>
            <ul>
                <li>Two Gameobjects with an AudioSource attached.</li>
                <li>Notice the Audiosource has the Loop and Play on Awake properties are checked.</li>
            </ul>
        </div>
        
        <div id="time" class="left">
          <img src="Lecture5Img/Bridge_4.png">
        </div>

        <div class="right">
        <h2>The Bridge</h2>
            <ul>
                <li>I positioned a Audio Positional Array Script gameobject above the bridge</li>
            </ul>
        </div>

        <div id="time" class="left">
          <img src="Lecture5Img/Bridge_2.png">
        </div>

        <div class="right">
        <h2>Bridge Metal Stress</h2>
            <ul>
                <li>Check out Audio Positional Array Script</li>
                <li>Sound Clips - these are the waveforms the AudioSource will play randomly.</li>
                <li>Sound Positions - these are the places in the world the AudioSource will move to</li>
                <li>The Audiosource will position itself at the closest position to the player listed in the SoundPositions</li>
                <li>Min and Max Time offset is the range of silent delay in between playing a random sound.</li>
                <li>Min and Max pitch.  The sound will play with a random pitch between these two values.</li>
                <li>Randomizing the pitch adds a bit of variety and prevents repititive sounds.</li>
                <li>Sound Zone Radius - How far away can the player get before we stop playing random sounds.</li>
               
            </ul>
        </div>

        <div id="time" class="left">
          <img src="Lecture5Img/Bridge_5.png">
        </div>

        <div class="right">
        <h2>The Bridge - AudioBridgeStress</h2>
            <ul>
                <li>Here is a look at the Parent Object AudioBridgeStress</li>
            </ul>
        </div>

        <div id="time" class="left">
          <img src="Lecture5Img/Bridge_3.png">
        </div>

        <div class="right">
        <h2>Object Source Bridge</h2>
            <ul>
                <li>Object Source Bridge - this child object of AudioBridgeStress moves to get close to the player</li>
                <li>It's a simple object with just an AudioSource attached.</li>
            </ul>
        </div>

         <div id="time" class="left">
          <img src="Lecture5Img/Bush_1.png">
        </div>

        <div class="right">
        <h2>Bush Impact</h2>
            <ul>
                <li>I placed a Gameobject with and AudioSource attached inside a bush close to the bridge</li>
                <li>There is a script attached that will play a bush sound if the player enters the trigger above a certain velocity</li>
            </ul>
        </div>

        <div id="time" class="left">
          <img src="Lecture5Img/Bush_2.png">
        </div>

        <div class="right">
        <h2>Bush Impact</h2>
            <ul>
                <li>Here is a close up of the AudioEnvPlayerImpact script attached to the bush</li>
            </ul>
        </div>
        
        <div id="time" class="left">
          <img src="Lecture5Img/Building_2.png">
        </div>

        <div class="right">
        <h2>Building approach Stinger</h2>
            <ul>
                <li>I placed a large box collider set to trigger across the likely path of the player has they approach the building.</li>
            </ul>
        </div>
        

        <div id="time" class="left">
          <img src="Lecture5Img/Building_1.png">
        </div>

        <div class="right">
        <h2>Building approach AudioEnvPlayerImpact Script</h2>
            <ul>
               <li>This script will play a small music sting (Music_BuildingIntro) when the player enters the trigger</li>
               <li>Notice the Disable Trigger After Enter box is checked.  This will ensure the music stinger only plays once.</li>
            </ul>
        </div>

        
        <div id="time" class="left">
          <img src="Lecture5Img/House_1.png">
        </div>

        <div class="right">
        <h2>House Approach</h2>
            <ul>
                <li>As a story element I wanted the play a creaking wood sound as the player approached the ruined shack</li>
                <li>I placed a Gameobject on the stairway leading to the house with the AudioEnvPlayerImpact attached.</li>
                <li>This will ensure that the play hears at least one wood creak as they approach the house.</li>
            </ul>
        </div>

        <div id="time" class="left">
          <img src="Lecture5Img/House_3.png">
        </div>

        <div class="right">
        <h2>House Approach Script</h2>
            <ul>
                <li>Here is a closer look at my settings on the AudioEnvPlayerImpact script</li>
            </ul>
        </div>

        <div id="time" class="left">
          <img src="Lecture5Img/Snapshot_1.png">
        </div>

        <div class="right">
        <h2>Mixer Snapshot Triggers</h2>
            <ul>
                <li>This is how I placed the triggers for the Audio Mixer Snapshot transitions.</li>
                <li>The inside trigger transitions to the interior snapshot</li>
                <li>The outside trigger transitions to the exterior snapshot</li>
                <li>Don't forget to cover the other door!</li>
            </ul>
        </div>

        <div id="time" class="left">
          <img src="Lecture5Img/Snapshot_2.png">
        </div>

        <div class="right">
        <h2>Mixer Snapshot Triggers</h2>
            <ul>
                <li>Side shot of the same triggers above</li>
            </ul>
        </div>

        <div id="time" class="left">
          <img src="Lecture5Img/Snapshot_3.png">
        </div>

        <div class="right">
        <h2>Mixer Snapshot Triggers</h2>
            <ul>
               <li>My settings for the Audio Snapshot Transition script - quarter second transition time.</li>
            </ul>
        </div>

        <div class="left">
          <img src="Lecture5Img/Waterfall_1.png">
        </div>

        <div class="right">
        <h2>Waterfall</h2>
            <ul>
                <li>The main AudioSource for the waterfall.</li>
            </ul>
        </div>

        <div class="left">
          <img src="Lecture5Img/Waterfall_2.png">
        </div>

        <div class="right">
        <h2>Waterfall - Close-Up Bass</h2>
            <ul>
                <li>The Bass close-up AudioSource for the waterfall</li>
            </ul>
        </div>

        <div class="left">
          <img src="Lecture5Img/WindBreezes_1.png">
        </div>

        <div class="right">
        <h2>Audio Wind Creak Zone Object</h2>
            <ul>
                <li>A look a the parent object AudioWindBreezes and the child object AudioCreaksSource.</li>
            </ul>
        </div>

        <div class="left">
          <img src="Lecture5Img/WindBreezes_2.png">
        </div>

        <div class="right">
        <h2>Audio Wind Creak Zone Child</h2>
            <ul>
                <li>A look at the child object AudioCreaksSource</li>
            </ul>
        </div>

        <div class="left">
          <img src="Lecture5Img/WindBreezes_3.png">
        </div>

        <div class="right">
        <h2>Audio Wind Creak Zone Script</h2>
            <ul>
                <li>Here is a look at my Audio Wind Creak Zone script</li>
            </ul>
        </div>

        </section>

  </body>
</html>