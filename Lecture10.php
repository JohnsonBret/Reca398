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
     <title>RECA 398 | Lecture 10</title>
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
        <h2 class="lectureTitle">Lecture 10 - Layered - Vertical Music</h2>
        <div class="lectureListContainer">
         
            <ol class="lectureList">
                <li><a href="#Item1">Wwise Layered Music</a></li>
                <li><a href="#Item2">Unity Scripting</a></li>
                
            </ol>
        </div>

        <h2 id="Item1">Wwise Layered Music</h2>
        <section class="instructionGrid">

          <div class="left">
            <img src="Lecture12/MusicWorkGroup.png">
          </div>
          <div class="right">
            <p>First we need to create a Music Work Unit in our Interactive Music Hierarchy.</p>
            
            <p>Right-Click on the Default Work Unit -> New Child -> Work Unit.</p>
          </div>

          <div class="left">
            <img src="Lecture12/MusicWorkGroupName.png">
          </div>

          <div class="right">
            <p>Name the new Work Unit - Music.</p>
          </div>

          <div class="left">
            <img src="Lecture12/ImportStageSegment.png">
          </div>

          <div class="right">
            <p>Go Into the Interactive Music folder I gave you.  Drag the Stage Folder onto
              the Music Work Unit.
            </p>
          </div>
          
          <div class="left">
            <img src="Lecture12/MusicSegment.png">
          </div>

          <div class="right">
            <p>On the folder change the Object Type / Action from Virtual Folder to Music Segment</p>
          </div>
          
          <div class="left">
            <img src="Lecture12/InteractiveMusicLayout.png">
          </div>

          <div class="right">
            <p>Go to the Layouts tab and change to the Interactive Music Layout.</p>
          </div>

          <div class="left">
            <img src="Lecture12/TempoTo136.png">
          </div>

          <div class="right">
            <p>Change the tempo of the Music Segment to 136 Beats per Minute.  This is the Tempo of all our Music files.</p>
          </div>
          
          <div class="left">
            <img src="Lecture12/BarsAndBeats.png">
          </div>

          <div class="right">
            <p>Right-Click on the timeline and change the timeline to Bars and Beats</p>
            <p>Make sure you click on the Snap To: Bars/Beats button in the Music Segment Editor.  It will turn Blue</p>
          </div>
          
          <div class="left">
            <img src="Lecture12/StartAndEndCue.png">
          </div>

          <div class="right">
            <p>Ctrl+Left-Click and move the Start Cue (Green Flag) to the start of our Music.<br>  Left-Click to move the End Cue (Red Flag) to the end of the Music on bar 17.</p>
          </div>
          


          <div class="left">
            <img src="Lecture12/MusicPlaylistContainer.png">
          </div>

          <div class="right">
            <p>Right-Click on our Music Segment Stage->New Parent-> Music Playlist Container</p>
          </div>

          <div class="left">
            <img src="Lecture12/MusicPlaylistContainerTempo.png">
          </div>

          <div class="right">
            <p>We need to set the tempo for our Music Playlist Container to 136bpm.<br>
              Otherwise, it will overwrite our Tempo on the Music Segement</p>
          </div>

          <div class="left">
            <img src="Lecture12/SequenceIntoPlaylistContainer.png">
          </div>

          <div class="right">
            <p>Drag our Stage Music Segment onto the Sequence Continuous icon in the Music Playlist Container</p>
          </div>


          <div class="left">
            <img src="Lecture12/MusicPlaylistLoopInfinite.png">
          </div>

          <div class="right">
            <p>On the Sequence Continuous click the down arrow to set the Loop Count to Infinite.</p>
          </div>
        

          <div class="left">
            <img src="Lecture12/PinTheTransport.png">
          </div>

          <div class="right">
            <p>Click on the NormalStage Music Playlist Container and then Pin the Transport Control</p>
          </div>

          <div class="left">
            <img src="Lecture12/StageContainerClick.png">
          </div>

          <div class="right">
            <p>Left-Click on the Stage Music Segment to give it focus.</p>
          </div>
          
          <div class="left">
            <img src="Lecture12/SoloTracks.png">
          </div>

          <div class="right">
            <p>We can solo tracks in our Music Segment to hear the individual Music Tracks.<br>
            This is useful to preview and make a plan for a music content.</p>
          </div>
          
          <div class="left">
            <img src="Lecture12/SoloReset.png">
          </div>
          <div class="right">
            <p>You can hit the Solo Reset button to clear all your solo tracks.<br>
            Helpful to quickly get back to the default state.</p>
          </div>
          
          <div class="left">
            <img src="Lecture12/RandomStepTrack.png">
          </div>
          <div class="right">
            <p>Find the Orchestral Percussion track and Right-Click on it.  From the context<br>
            menu select Random Step</p>
          </div>
          
          <div class="left">
            <img src="Lecture12/BlueBarRandomStep.png">
          </div>
          <div class="right">
            <p>Notice the Blue Bar that has appeared on the track we set to Random Step.</p>
          </div>

          <div class="left">
            <img src="Lecture12/AddSubTrack.png">
          </div>
          <div class="right">
            <p>Right-Click on the Random Step track and add a Sub-Track.<br>
            Make sure you do it on the Orchestral Percussion track.  This photo doesn't show it clearly.</p>
          </div>

          <div class="left">
            <img src="Lecture12/DragToSubTrack.png">
          </div>
          <div class="right">
            <p>Drag the Percussion Hits Track onto the newly created Sub-Track</p>
          </div>

          <div class="left">
            <img src="Lecture12/DeleteEmptyTracks.png">
          </div>
          <div class="right">
            <p>Now that we have moved our Percussion Hits to the Sub-Track we can delete<br>
            the track that Percussion Hits formerly occupied. Clean up your Mess!</p>
          </div>
          
          <div class="left">
            <img src="Lecture12/AddEmptySubTracks.png">
          </div>
          <div class="right">
            <p>You can lower chance of a certain track playing by adding empty Sub-Tracks.<br>
            Also NOT playing a part can add even more variety to our Layered Music.</p>
          </div>

          <div class="left">
            <img src="Lecture12/SelectSequenceStep.png">
          </div>
          <div class="right">
            <p>Now lets Right-Click on our Piano Solo track and created a Sequence Step<br>
            This will make a green bar on the right side of the track.</p>
          </div>

          <div class="left">
            <img src="Lecture12/AddSubTrack.png">
          </div>
          <div class="right">
            <p>Let's add a Sub-Track to our Sequence Step</p>
          </div>

          <div class="left">
            <img src="Lecture12/DragLeadCelloToSubTrack.png">
          </div>
          <div class="right">
          <p>Let's Drag our Lead Cello track to the empty Sub-Track we just created.<br>
          Make sure you delete the track that Lead Cello previously occupied.<br>
          Like any other Sound we need to create and Event for our Music Playlist.<br>
          We also need to create a Sound Bank for our Music and add the Event to that bank.</p>
          </div>
          
          
          
          




          

        </section>
        

        <div id="Item2">
          <hr>
          <h2>Unity Script</h2>
          <p>Let's add our PostEvent call to the WaveManager.cs script.</p>
          <img src="Lecture12/FunctionCallScript.png">
          <p>Let's add our Function Call StartGameMusic() to the Start() Function<br>
          in the WaveManager.  This is going to be highlighted until we finish.</p>
          <img src="Lecture12/FunctionDefinition.png">
          <P>On a blank line under our StartWaveManager() function lets add our StartGameMusic()<br>
          function definition</P>
          <hr>
        </div>

        <!-- <img src="Lecture12/SurvivalShooterAssignment.png">

        <div id="Item3">
            <hr>
            <h2>Survival Shooter Requirements</h2>
            <img src="Lecture12/SurvivalShooterAssignment.png">
            <hr>
          </div> -->
    </div>
  </body>
</html>