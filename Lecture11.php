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
     <!-- <link rel="stylesheet" href="Lecture13/Lecture13style.css"> -->
     <title>RECA 398 | Lecture 11</title>
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
        <h2 class="lectureTitle">Lecture 13 - Music States</h2>
        <div class="lectureListContainer">
         
            <ol class="lectureList">
                <li><a href="#Item1">Layered Boss Music</a></li>
                <li><a href="#Item2">Wave States</a></li>
                
            </ol>
        </div>

        <h2 id="Item1">Boss State Music</h2>
        <section class="instructionGrid">
          


          <div class="left">
            <img src="Lecture13/BossMusicFolder.png">
          </div>
          <div class="right">
            <p>Go to your Interactive Music folder and create a folder called Boss</p>  
          </div>
          
          <div class="left">
            <img src="Lecture13/BossMusicChoose.png">
          </div>
          <div class="right">
            <p>Put any music you would like to use for the Boss Wave into this folder.<br>
            I kept it simple with just 2 tracks - Boss Clean and Boss Dirty</p>
          </div>

          <div class="left">
            <img src="Lecture13/BossMusicDrag.png">
          </div>
          <div class="right">
            <p>Drag the Boss Folder you created onto the Music Work Unit.</p>
          </div>
          
          <div class="left">
            <img src="Lecture13/BossMusicSegment.png">
          </div>
          <div class="right">
            <p>On the folder change the Object Type / Action from Virtual Folder to Music Segment</p>
          </div>

          <div class="left">
            <img src="Lecture13/InteractiveMusicLayout.png">
          </div>
          <div class="right">
            <p>Go to the Layouts tab and change to the Interactive Music Layout.</p>
          </div>
          
          <div class="left">
            <img src="Lecture13/BossMusicSetTempoSegment.png">
          </div>
          <div class="right">
            <p>Change the tempo of the Boss Music Segment to 136 Beats per Minute.  This is the Tempo of all our Music files.</p>
          </div>
          
          <div class="left">
            <img src="Lecture13/BossMusicSetCue.png">
          </div>
          <div class="right">
            <p>Ctrl+Left-Click and move the Start Cue (Green Flag) to the start of our Music.<br>  Left-Click to move the End Cue (Red Flag) to the end of the Music on bar 17.</p>
          </div>

          <div class="left">
            <img src="Lecture13/BossMusicPlaylist.png">
          </div>
          <div class="right">
            <p>Right-Click on our Boss Music Segment ->New Parent-> Music Playlist Container</p>
          </div>
          
          <div class="left">
            <img src="Lecture13/BossMusicTempot.png">
          </div>
          <div class="right">
            <p>We need to set the tempo for our Music Playlist Container to 136bpm.<br>
              Otherwise, it will overwrite our Tempo on the Music Segement</p>
          </div>
          
          <div class="left">
            <img src="Lecture13/BossMusicSequence.png">
          </div>
          <div class="right">
            <p>Drag our Stage Music Segment onto the Sequence Continuous icon in the Music Playlist Container</p>
          </div>
          
          <div class="left">
            <img src="Lecture13/BossMusicInfinite.png">
          </div>
          <div class="right">
            <p>On the Sequence Continuous click the down arrow to set the Loop Count to Infinite.</p>
          </div>
          
          <div class="left">
            <img src="Lecture13/BossPinTransport.png">
          </div>
          <div class="right">
          <p>Click on the Boss Stage Music Playlist Container and then Pin the Transport Control</p>
          </div>
          
          <div class="left">
            <img src="Lecture13/BossMusicSegmentFocus.png">
          </div>
          <div class="right">
            <p>Left-Click on the Boss Music Segment to give it focus.</p>
          </div>
          
          <div class="left">
          <img src="Lecture13/BossMusicRandomStep.png">
          </div>
          <div class="right">
          <p>Pick a Boss Music track and set it to either Random Step or Sequence Step</p>
          </div>
          
          <div class="left">
            <img src="Lecture13/BossMusicSubTrack.png">
          </div>
          <div class="right">
            <p>Right-Click on the Sequence / Random Step track and add a Sub-Track.</p>
          </div>

          <div class="left">
            <img src="Lecture13/BossMusicDragSub.png">
          </div>
          <div class="right">
            <p>Drag a Boss Music Track onto the newly created Sub-Track</p>
          </div>
          
          <div class="left">
            <img src="Lecture13/DeleteEmptyTracks.png">
          </div>
          <div class="right">
            <p>Clean up your Mess! Delete any left-over tracks</p>
          </div>
        </section>    
          
        <h2 id="Item2">Create Wave States</h2>
        <section class="instructionGrid">
          
          <div class="left">
          <img src="Lecture13/StateCreateGroup.png">
          </div>
          <div class="right">
          <ul>
            <li>Go to the Game Syncs Tab</li>
            <li>Select the Default Work Unit in States</li>
            <li>Create a new State Group</li>
          </ul>
          </div>

          <div class="left">
            <img src="Lecture13/StateGroupName.png">
          </div>
          <div class="right">
            <p>Name your State Group WaveState and add Two States Normal and Boss</p>
          </div>
        
          <div class="left">
            <img src="Lecture13/StateGroupFinished.png">
          </div>
          <div class="right">
            <p>Here is how it should look when it is finished.</p>
          </div>
        
          <div class="left">
            <img src="Lecture13/StateTransition.png">
          </div>
          <div class="right">
            <p>Add some State Transitions and Times from the Normal to Boss State<br>
            And from Boss to Normal</p>
          </div>

          <div class="left">
            <img src="Lecture13/StateMusicSwitch.png">
          </div>
          <div class="right">
            <p>Select both the Normal and Boss Music Playlist container.<br>
            Right-Click -> New Parent -> Music Switch Container</p>
          </div>

          <div class="left">
            <img src="Lecture13/StateMusicSwitchName.png">
          </div>
          <div class="right">
            <p>Name the Music Switch Container I choose MusicSwitch</p>
          </div>

          <div class="left">
            <img src="Lecture13/StateMusicSwitchTempo.png">
          </div>
          <div class="right">
            <p>Select the Music Switch and set it's Tempo to 136<br>
            In the case, where you had music of different tempos you would not do this operation.<br>
            In our case, all of our music is 136 bpm</p>
          </div>

          <div class="left">
            <img src="Lecture13/StateMusicAssociationContainer.png">
          </div>
          <div class="right">
            <p>1.Select the Music Switch and 2. Look at the Association Container<br>
            on the right.</p>
          </div>

          <div class="left">
            <img src="Lecture13/StateMusicAttachState.png">
          </div>
          <div class="right">
            <p>Click on the >> and go State Groups -> Default Work Unit -><br>
            WaveState</p>
          </div>

          <div class="left">
            <img src="Lecture13/StateMusicAddPath.png">
          </div>
          <div class="right">
            <p>Click on the Boss State and then click on Add Path</p>
          </div>

          <div class="left">
          <img src="Lecture13/StateMusicBossObject.png">
          </div>
          <div class="right">
          <p>Either Drag the Boss Music Playlist onto the Path's Object Box OR<br>
          You can click on the elipsis ... and select BossStage from the list.</p>
          </div>

          <div class="left">
            <img src="Lecture13/StateMusicPathsComplete.png">
          </div>
          <div class="right">
            <p>Add another Path for the Normal Stage music and place it's<br>
            Music Playlist on the Stage Object slot as in this picture.</p>
          </div>

          <div class="left">
            <img src="Lecture13/StateTransitionsTab.png">
          </div>
          <div class="right">
            <p>Select the Music Switch Container and then Navigate to the<br>
            Transitions Tab.</p>
          </div>

          <div class="left">
          <img src="Lecture13/StateTransNormalBoss.png">
          </div>
          <div class="right">
          <p>Click on Add Transition and drag the Normal Music onto the Source<br>
            and the Boss music onto the Destination.</p>
          </div>

          <div class="left">
            <img src="Lecture13/StateTransNextBar.png">
          </div>
          <div class="right">
          <p>Currently when we enter our Boss State we have to wait until the<br>
          Normal music is finished playing before we transition to our Boss Music.<br>
          That's too slow.  Select an Exit source at value that is more prompt.</p>
          </div>

          <div class="left">
            <img src="Lecture13/StateTransEnterExit.png">
          </div>
          <div class="right">
            <p>Add another transition from the Boss Music back to the Normal.<br>
            Select the transitions one at a time and make sure the Exit Cue is<br>
            set to next bar and the Entry Cue is Same Time as Playing Segment</p>
          </div>

          <div class="left">
          <img src="Lecture13/StateTransFadeOut.png">
          </div>
          <div class="right">
            <p>Check the Fade-Out button under Exit Source at and Click Edit.</p>
          </div>


          <div class="left">
            <img src="Lecture13/StateTransFadeTime.png">
          </div>
          <div class="right">
            <p>Set the Fade Time and Offset to 1 and Change the Curve to<br>
            something you like.</p>
          </div>

          <div class="left">
            <img src="Lecture13/StateTransFadeIn.png">
          </div>
          <div class="right">
            <p>Under Destination Check Fade-In and click on Edit.</p>
          </div>

          <div class="left">
            <img src="Lecture13/StateTransFadeInTime.png">
          </div>
          <div class="right">
            <p>Set the Fade Time to 1 and the Offset to -1 and Change the Curve.<br>
            Repeat this process for the other Transition as well!</p>
          </div>


          <div class="left">
            <img src="Lecture13/StateMusicScript_1.png">
          </div>
          <div class="right">
          <p>Set the WaveState to Normal and Post the "Play_MusicSwitch" Event inside of the StartLevelMusic() function.</p>
          <p>Inside the GetNextState() function add the State to Boss and Normal states.</p>
          </div>



        </section>
                  
        <!-- <div id="Item3">
            <hr>
            <h2>Survival Shooter Requirements</h2>
            <img src="Lecture13/SurvivalShooterAssignment.png">
            <hr>
          </div> -->
      

        <!-- The Modal -->
        <div id="myModal" class="modal">

          <!-- The Close Button -->
          <span class="close">&times;</span>

          <!-- Modal Content (The Image) -->
          <img class="modal-content" id="img01">

          <!-- Modal Caption (Image Text) -->
          <div id="caption"></div>
        </div> 

    </div>
    <script src="lecture.js"></script>
  </body>
</html>