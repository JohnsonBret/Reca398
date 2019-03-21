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

     <link rel="stylesheet" href="LectureGrid.css">
     <title>RECA 398 | Lecture 3</title>
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
        <h2 class="lectureTitle">Lecture 3 - Marble Game</h2>
        <div class="lectureListContainer">
            <ol class="lectureList">
                <li><a href="#Speed">PowerUp - Speed</a></li>
                <li><a href="#time">PowerUp - Time</a></li>
                <li><a href="#jump">PowerUp - Jump</a></li>
                <li><a href="#platform">PowerUp - Moving Platform</a></li>
                <li><a href="#gamemode">PowerUp - Game Mode</a></li>
                <li><a href="#bug">PowerUp - Game Mode Script Bug</a></li>
                <li><a href="#thwomp">Enemy Thwomp</a></li>
            </ol>
        </div>
    </div>

    <h2 class="lectureTitle">Speed</h2>
    <section class="instructionGrid">

        <div id="Speed" class="left">
          <img src="Lecture3Img/01_PowerUpPrefab.png">
        </div>

        <div class="right">
            <ol>
                <li>Select the PowerUp prefab from the Project Tab</li>
            </ol>
        </div>

        <div class="left">
          <img src="Lecture3Img/02_PowerUpDragIn.png">
        </div>

        <div class="right">
            <ol>
                <li>Left-Click and drag the PowerUp Prefab from the Project Tab into the Scene.</li>
            </ol>
        </div>

        <div class="left">
          <img src="Lecture3Img/03_DropdownSpeed.png">
        </div>

        <div class="right">
            <ol>
                <li>Make sure the PowerUp Gameobject is selected in the Hierarchy</li>
                <li>Find the Power Up script in the Inspector</li>
                <li>Left-Click on the Power Up Type dropdown menu</li>
                <li>Select Speed from the dropdown</li>
            </ol>
        </div>

        <div class="left">
          <img src="Lecture3Img/04_SpeedUp.png">
        </div>

        <div class="right">
            <ol>
                <li>Increase the Speed Modifier number to speed up the Marble on pickup.</li>
            </ol>
        </div>

        <div class="left">
          <img src="Lecture3Img/05_ReverseDirection.png">
        </div>

        <div class="right">
            <ol>
                <li>Inputting a negative number in the Speed Modifier will reverse the player input controls</li>
            </ol>
        </div>

    </section>

    <h2 class="lectureTitle">Time</h2>
    <section class="instructionGrid">
        <div id="time" class="left">
          <img src="Lecture3Img/06_DropdownTime.png">
        </div>

        <div class="right">
            <ol>
                <li>Make sure the PowerUp Gameobject is selected in the Hierarchy</li>
                <li>Find the Power Up script in the Inspector</li>
                <li>Left-Click on the Power Up Type dropdown menu</li>
                <li>Select Time from the dropdown</li>
            </ol>
        </div>

        <div class="left">
          <img src="Lecture3Img/07_AddTime.png">
        </div>

        <div class="right">
            <ol>
                <li>A positive number in the Time Modifier field will add time (in seconds) to the clock.</li>
            </ol>
        </div>

        <div class="left">
          <img src="Lecture3Img/08_RemoveTime.png">
        </div>

        <div class="right">
            <ol>
                <li>A negtive number in the Time Modifier field will remove time from the clock.</li>
            </ol>
        </div>

    </section>

    <h2 class="lectureTitle">Jump</h2>
    <section class="instructionGrid">
        <div id="jump" class="left">
          <img src="Lecture3Img/09_DropdownJump.png">
        </div>

        <div class="right">
            <ol>
                <li>Make sure the PowerUp Gameobject is selected in the Hierarchy</li>
                <li>Find the Power Up script in the Inspector</li>
                <li>Left-Click on the Power Up Type dropdown menu</li>
                <li>Select Jump from the dropdown</li>
            </ol>
        </div>

        <div class="left">
          <img src="Lecture3Img/10_AddJump.png">
        </div>

        <div class="right">
            <ol>
                <li>To increase the jump power of the marble put a positive number in the Jump Modifier field</li>
                <li>Small numbers can have big changes.  I find anything larger than 10 to be dramatic.</li>
            </ol>
        </div>

        <div class="left">
          <img src="Lecture3Img/11_DisableJump.png">
        </div>

        <div class="right">
            <ol>
                <li>If you want to disable the Jump ability for the player.  Set the Jump Modifier number to zero.</li>
            </ol>
        </div>

    </section> 
    
    <h2 class="lectureTitle">Platform</h2>
    <section class="instructionGrid">
        <div id="platform" class="left">
          <img src="Lecture3Img/12_ScriptEnabled.png">
        </div>

        <div class="right">
            <ol>
                <li>It is possible to disable or enable single scripts attached to Gameobjects</li>
                <li>If the script has a checkmark next to the script name (Moving Platform) then the script is enabled.</li>
            </ol>
        </div>

        <div class="left">
          <img src="Lecture3Img/13_ScriptDisabled.png">
        </div>

        <div class="right">
            <ol>
                <li>Clicking on the checkbox will disable the script.</li>
                <li>If you want to use the Platform Activator Power Up make sure the Platform you want to activate has the Moving Platform script disabled.</li>
            </ol>
        </div>

        <div class="left">
          <img src="Lecture3Img/14_DropdownPlatform.png">
        </div>

        <div class="right">
            <ol>
                <li>Make sure the PowerUp Gameobject is selected in the Hierarchy</li>
                <li>Find the Power Up script in the Inspector</li>
                <li>Left-Click on the Power Up Type dropdown menu</li>
                <li>Select PlatformActivator from the dropdown</li>
            </ol>
        </div>

        <div class="left">
          <img src="Lecture3Img/15_DragPlatform1.png">
        </div>

        <div class="right">
            <ol>
                <li>To connect the Power Up script and the Moving Platform we want to activate we have to attach a Moving Platform into the Moving Platform field on the script.</li>
                <li>Click and Drag the Moving platform you want to activate from the Hierarchy to the Moving Platform field on the PowerUp script</li>
            </ol>
        </div>

        <div class="left">
          <img src="Lecture3Img/16_DragPlatform2.png">
        </div>

        <div class="right">
            <ol>
                <li>While dragging the Moving Platform, you know you are in the right spot when the background of None (Moving Platform) turns blue.</li>
            </ol>
        </div>

        <div class="left">
          <img src="Lecture3Img/16_DragPlatform3.png">
        </div>

        <div class="right">
            <ol>
                <li>This is how the Power Up script should look when the Moving Platform is attached.</li>
            </ol>
        </div>

        <div class="left">
          <img src="Lecture3Img/17_RoughMovePlatform.png">
        </div>

        <div class="right">
            <ol>
                <li>Select the move tool from the Toolbar (W key on the keyboard)</li>
                <li>Use the colored arrows to roughly position your moving platform in the scene.</li>
            </ol>
        </div>

        <div class="left">
          <img src="Lecture3Img/18_RoundTransNumbers.png">
        </div>

        <div class="right">
            <ol>
                <li>It's often helpful to use round whole numbers in the Transform.</li>
                <li>It can make it easier and cleaner when setting the moving positions for the platform later.</li>
                <li>Pro Tip: You can use the Tab key to change between the fields</li>
            </ol>
        </div>

        <div class="left">
          <img src="Lecture3Img/19_SetPositionOne.png">
        </div>

        <div class="right">
            <ol>
                <li>Set the Position One X, Y, and Z values in the Moving Platform script</li>
                <li>Although its not required, usually it will be the same X, Y, and Z values as the Positon in the Transform component.</li>
            </ol>
        </div>

        <div class="left">
          <img src="Lecture3Img/19_SetPositionTwo.png">
        </div>

        <div class="right">
            <ol>
                <li>Set Position Two.  This is the location the platform will be moving toward.</li>
                <li>I only changed the Y value in the example here</li>
                <li>This moving platform will be moving up and down in the Y direction</li>
                <li>Experiment with changing the values in the X, Y, and Z directions</li>
            </ol>
        </div>

        <div class="left">
          <img src="Lecture3Img/20_SpeedPosition.png">
        </div>

        <div class="right">
            <ol>
                <li>Setting the Speed Position One and Speed Position Two variables changes how quickly the platform moves back and forth</li>
                <li>These two numbers do not need to be the same value.</li>
            </ol>
        </div>
    </section>
        
    <h2 class="lectureTitle">GameMode</h2>
    <section class="instructionGrid">
        <div id="gamemode" class="left">
          <img src="Lecture3Img/21_DropdownGamemode.png">
        </div>

        <div class="right">
            <ol>
                <li>Make sure the PowerUp Gameobject is selected in the Hierarchy</li>
                <li>Find the Power Up script in the Inspector</li>
                <li>Left-Click on the Power Up Type dropdown menu</li>
                <li>Select GameMode from the dropdown</li>
            </ol>
        </div>

        <div class="left">
          <img src="Lecture3Img/22_ChooseMode.png">
        </div>

        <div class="right">
            <ol>
                <li>You can change the GameMode from either FREEPLAY or TIMED</li>
                <li>If you are changing the GameMode to the mode you are currently in (e.g. From TIMED to TIMED) there will be no effect</li>
            </ol>
        </div>

        <div id="bug" class="left">
          <img src="Lecture3Img/23_SelectGameManager.png">
        </div>

        <div class="right">
            <ol>
                <li>There was a bug in the MarbleGameManager last week.  Let's fix it.</li>
                <li>Double click on the MarbleGameManager in the Project Tab</li>
            </ol>
        </div>

        <div class="left">
          <img src="Lecture3Img/24_TimeLimitBefore.png">
        </div>

        <div class="right">
            <ol>
                <li>The script will open up in your Code Editor</li>
                <li>Find the Awake() function (line 45)</li>
                <li>Cut line 62 "currentTime = TimeLimit;" using Ctrl + x or Cmd + x</li>
            </ol>
        </div>

        <div class="left">
          <img src="Lecture3Img/24_TimeLimitAfter.png">
        </div>

        <div class="right">
            <ol>
                <li>Paste the line of code right below "panelLose.SetActive(false) for me this is line 56</li>
                <li>Use Ctrl + v or Cmd + v to paste the line of code.</li>
            </ol>
        </div>

        </section>


        <h2 class="lectureTitle">Enemy Thwomp</h2>
        <section class="instructionGrid">


        <div id="thwomp" class="left">
          <img src="Lecture3Img/25_CreateEmptyGO.png">
        </div>

        <div class="right">
            <ol>
                <li>In the Hierarchy Tab left-click on the Create Button.</li>
                <li>Select Create Empty from the context menu.</li>
            </ol>
        </div>

        <div class="left">
          <img src="Lecture3Img/26_RenameThwompParent.png">
        </div>

        <div class="right">
            <ol>
                <li>Left click on the new Empty Gameobject in the Hierarchy Tab</li>
                <li>In the Inspector rename the Gameobject Thwomp Parent</li>
            </ol>
        </div>

        <div class="left">
          <img src="Lecture3Img/27_AddChild.png">
        </div>

        <div class="right">
            <ol>
                <li>Right click on the ThwompParent Gameobject in the Hierarchy tab</li>
                <li>From the context menu hover the mouse over 3D Object</li>
                <li>From the sub-menu select Cube</li>
            </ol>
        </div>

        <div class="left">
          <img src="Lecture3Img/28_RenameThwomp.png">
        </div>

        <div class="right">
            <ol>
                <li>Left click on the child Cube</li>
                <li>In the Inspector, rename the child Cube to Thwomp</li>
            </ol>
        </div>

        <div class="left">
          <img src="Lecture3Img/29_GameoverScript.png">
        </div>

        <div class="right">
            <ol>
                <li>Make sure the Thwomp cube is selected in the Hierarchy Tab</li>
                <li>In the Inspector, left click on the Add Component button</li>
                <li>From the menu find the Gameover Trigger script and left click on it.</li>
            </ol>
        </div>

        <div class="left">
          <img src="Lecture3Img/30_SetIsTrigger.png">
        </div>

        <div class="right">
            <ol>
                <li>Make sure the Thwomp cube is selected in the Hierarchy Tab</li>
                <li>In the Inspector, find the Box Collider component</li>
                <li>Make sure the Is Trigger check box is checked.</li>
            </ol>
        </div>

        <div class="left">
          <img src="Lecture3Img/31_ParentAnimator.png">
        </div>

        <div class="right">
            <ol>
                <li>In the Hierarchy, left click on the ThwompParent Gameobject</li>
                <li>In the Inspector, click on the Add Component button</li>
                <li>From the menu find the Animator component</li>
            </ol>
        </div>

        <div class="left">
          <img src="Lecture3Img/32_CreateController.png">
        </div>

        <div class="right">
            <ol>
                <li>In the Project Tab, right click on the Game 3 - Marble Game folder</li>
                <li>From the menu hover over the Create option</li>
                <li>From the submenu select the Animator Controller component and left click</li>
            </ol>
        </div>

        <div class="left">
          <img src="Lecture3Img/33_NameThwomp.png">
        </div>

        <div class="right">
            <ol>
                <li>In the Project Tab, go ahead and rename the Animator Controller Thwomp</li>
            </ol>
        </div>

        <div class="left">
          <img src="Lecture3Img/34_SmashAnim.png">
        </div>

        <div class="right">
            <ol>
                <li>In the Animation Tab, click on the Create Button</li>
                <li>Name the new animation Smash and click on the Save button</li>
                <li>(If you don't have the Animation Tab visible you can find it under Window->Animation->Animation)</li>
            </ol>
        </div>

        <div class="left">
          <img src="Lecture3Img/35_AnimateThwompTrans.png">
        </div>

        <div class="right">
            <ol>
                <li>In the Animation Tab, click on the Add Property button</li>
                <li>Expand the Thwomp Object by left clicking the arrow / chevron to the left of it.</li>
                <li>Expand the Thwomp Transform component by left clicking the arrow / chevron to the left of it</li>
                <li>Click on the Plus button + next the Position property</li>
            </ol>
        </div>

        <div class="left">
          <img src="Lecture3Img/36_ExpandPosition.png">
        </div>

        <div class="right">
            <ol>
                <li>Expand the Position property under Thwomp : Position by left clicking the chevron / arrow to the left of it.</li>
            </ol>
        </div>

        <div class="left">
          <img src="Lecture3Img/37_AddKey.png">
        </div>

        <div class="right">
            <ol>
                <li>Right click on the grey timeline and select Add Key from the context menu.</li>
            </ol>
        </div>

        <div class="left">
          <img src="Lecture3Img/38_ChangePosition.png">
        </div>

        <div class="right">
            <ol>
                <li>Change the position in direction you want the Thwomp to animate</li>
                <li>Experiment by changing the numbers and the position of the key in the timeline</li>
            </ol>
        </div>

        <div class="left">
          <img src="Lecture3Img/39_ChangeSamples.png">
        </div>

        <div class="right">
            <ol>
                <li>A quick and dirty way to change the overall speed of the animation is to change the Samples value</li>
            </ol>
        </div>

        <div class="left">
          <img src="Lecture3Img/40_PositionParent.png">
        </div>

        <div class="right">
            <ol>
                <li>In the Hierarchy, left click on the Thwomp Parent</li>
                <li>Using the move tool move the Thwomp parent to the desired position in the scene</li>
                <li>Be careful you are not selected on the Thwomp child object.  It will have undesired consequences!</li>
            </ol>
        </div>
        </section>

  </body>
</html>