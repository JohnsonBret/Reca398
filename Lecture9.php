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
     <title>RECA 398 | Lecture 9</title>
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
        <h2 class="lectureTitle">Lecture 9 - Switches and DEATH</h2>
        <div class="">
            <ol class="lectureList">
                <li><a href="#deathSwitch">Death Switch Sounds</a></li>
                <li><a href="#animationEvent">Ui Text Animation Sounds</a></li>                
            </ol>
        </div>

        <section class="instructionGrid">

        <div id="deathSwitch" class="left">
          <img src="Lecture9/ImportAudio.png">
        </div>

        <div class="right">
            <h2>Import your Death SFX</h2>
            <ul>
                <li>Navigate to your death sfx in the explorer / finder.</li>
                <li>Drag them onto your default work unit in Wwise to import them.</li>
            </ul>
        </div>

        <div class="left">
          <img src="Lecture9/ImportSfxObjects.png">
        </div>

        <div class="right">
            <h2>Check your import settings</h2>
            <ul>
                <li>Make sure your Object Type / Action is set to Sound SFX</li>
                <li>Click the import button.</li>
            </ul>
        </div>

        <div class="left">
          <img src="Lecture9/RandomContainer.png">
        </div>

        <div class="right">
            <h2>Create a Random Container</h2>
            <ul>
                <li>Select all the sounds for a character (e.g. Zombunny) using Shift+Left-click</li>
                <li>Once selected right-click on the select SFX</li>
                <li>From the context menu navigate to New Parent->Random Container.</li>
                <li>Left-click on Random Container.</li>
            </ul>
        </div>

        <div class="left">
          <img src="Lecture9/CompleteRandomContainers.png">
        </div>

        <div class="right">
            <h2>Create Random Containers for your remaining enemies.</h2>
            <ul>
                <li>Repeat the process of creating Random Containers for your remaining enemies</li>
                <li>It should look like the picture on the left when complete.</li>
            </ul>
        </div>

        <div class="left">
          <img src="Lecture9/ClickGameSyncs.png">
        </div>

        <div class="right">
            <h2>Left-click on the Game Syncs Tab</h2>
            <ul>
                <li>We will be creating our Switch Group here.</li>
            </ul>
        </div>

        <div class="left">
          <img src="Lecture9/NewSwitchGroup.png">
        </div>

        <div class="right">
            <h2>Left-click Create new 'Switch Group' button</h2>
            <ul>
                <li>It's the black button with the vertical line and three vertical squares.</li>
                <li>You should name this group 'Enemy Death' (no quotes)</li>
            </ul>
        </div>

        <div class="left">
          <img src="Lecture9/CreateNewSwitch.png">
        </div>

        <div class="right">
            <h2>Left-click Create new 'Switch' button</h2>
            <ul>
                <li>It's a black button with a single white square.</li>
                <li>We need to create three of these.  One for each enemy.</li>
                <li>I recommend you name your switches 'Bear', 'Bunny' and 'Elephant'</li>
            </ul>
        </div>

        <div class="left">
          <img src="Lecture9/SwitchGroupComplete.png">
        </div>

        <div class="right">
            <h2>Completed Switch Group</h2>
            <ul>
                <li>This is how your group should look when it is complete.</li>
            </ul>
        </div>

        <div class="left">
          <img src="Lecture9/SwitchContainer.png">
        </div>

        <div class="right">
            <h2>Create Switch Container</h2>
            <ul>
                <li>We need a Switch Container to hold our three Random Containers for our Bear, Bunny and Elephant</li>
                <li>Left-click on the Audio Tab</li>
                <li>Right-click on the Default Work Unit</li>
                <li>From the context menu select New Child->Switch Container</li>
                <li>I recommend you name it 'EnemyDeathSwitch'</li>
            </ul>
        </div>

        <div class="left">
          <img src="Lecture9/SwitchContainerFilled.png">
        </div>

        <div class="right">
            <h2>Add Random Containers to the Switch Container</h2>
            <ul>
                <li>Left-click and drag your Random container for each enemy onto the Switch Container</li>
                <li>It should look like the image on the left when you have finished.</li>
            </ul>
        </div>

        <div class="left">
          <img src="Lecture9/ConnectSwitch.png">
        </div>

        <div class="right">
            <h2>Connect the Switch Group to the Switch Container</h2>
            <ul>
                <li>Left-click on the Switch Container so that it is selected in the Default Work Group</li>
                <li>In the Switch Container Property Editor left-click on the '> >' under Group</li>
                <li>From the context menu navigate to Switch Groups->Enemy Death left-click</li>
            </ul>
        </div>

        <div class="left">
          <img src="Lecture9/ConnectRandomAndSwitchStates.png">
        </div>

        <div class="right">
            <h2>Connect the Random Containers and Switches</h2>
            <ul>
                <li>Look at the bottom on the screen in the EnemyDeathSwitch - Contents editor</li>
                <li>Left-click on the Random Container for each animal and drag it right to the Switch of the same name</li>
                <li>Repeat this process until all Random Containers and Switches are properly connected.</li>
            </ul>
        </div>

        <div class="left">
          <img src="Lecture9/PreviewSwitch.png">
        </div>

        <div class="right">
            <h2>Preview your Switch Container</h2>
            <ul>
                <li>Left-click on your Switch Container in the Default Work Unity</li>
                <li>At the bottom of the screen in the Transport click on the Switches button</li>
                <li>Click the play button - You should hear a death sound.</li>
                <li>On the right side of the Transport there is a dropdown menu.  You can select the Switch you would like to preview here.</li>
                <li>Preview each enemy and make sure each Switch plays the correct sounds.  (e.g. the Bear sounds like the Bear)</li>
            </ul>
        </div>

        <div class="left">
          <img src="Lecture9/AddSwitchEvent.png">
        </div>

        <div class="right">
            <h2>Add Event for the Switch Container</h2>
            <ul>
                <li>Right-click on the Switch Container in the default work unit.</li>
                <li>From the context menu navigate to New Event->Play</li>
                <li>Left-click on Play</li>
            </ul>
        </div>

        <div class="left">
          <img src="Lecture9/LayoutSoundBank.png">
        </div>

        <div class="right">
            <h2>Switch to the SoundBank Layout</h2>
            <ul>
                <li>At the top of the screen left-click on the Layouts menu.</li>
                <li>Left-click on SoundBank - If you are a hotkey power user hit F7</li>
            </ul>
        </div>

        <div class="left">
          <img src="Lecture9/NewSoundBank.png">
        </div>

        <div class="right">
            <h2>Create a new SoundBank</h2>
            <ul>
                <li>Left-click on the Default Work Unit</li>
                <li>In the SoundBank Manager left-click on New</li>
                <li>Name the new SoundBank Enemies</li>
            </ul>
        </div>

        <div class="left">
          <img src="Lecture9/AddEventToBank.png">
        </div>

        <div class="right">
            <h2>Add our Switch Event to the new Enemies SoundBank</h2>
            <ul>
                <li>Left-click on the Enemies SoundBank we just created.</li>
                <li>In the bottom left of the screen drag your Event from the Event Viewer into the Hierachy Inclusion space.</li>
            </ul>
        </div>

        <div class="left">
          <img src="Lecture9/GenerateSoundBanks.png">
        </div>

        <div class="right">
            <h2>Generate our SoundBanks</h2>
            <ul>
                <li>Right-click on the Default Work Unit.</li>
                <li>From the context menu that appears left-click on 'Generate Soundbank(s) for all platforms'</li>
            </ul>
        </div>

        <div class="left">
          <img src="Lecture9/LoadBank.png">
        </div>

        <div class="right">
            <h2>Add the Ak Bank Wwise script</h2>
            <ul>
                <li>Left-click on your Main Camera in the Hierarchy.</li>
                <li>In the Inspector left-click on Add Component and then choose Ak Bank from the list</li>
            </ul>
        </div>

        <div class="left">
          <img src="Lecture9/AkBank1.png">
        </div>

        <div class="right">
            <h2>Add the Enemies Bank 1</h2>
            <ul>
                <li>Left-click on Bank Name button in the Ak Bank Script</li>
            </ul>
        </div>

        <div class="left">
          <img src="Lecture9/AkBank2.png">
        </div>

        <div class="right">
            <h2>Add the Enemies Bank 2</h2>
            <ul>
                <li>Select the Enemies Bank we just created from the menu.</li>
            </ul>
        </div>

        <div class="left">
          <img src="Lecture9/AkBank3.png">
        </div>

        <div class="right">
            <h2>Add the Enemies Bank 3</h2>
            <ul>
                <li>This is how your Ak Bank script should look when it is complete.</li>
            </ul>
        </div>

        <div class="left">
          <img src="Lecture9/DeathSound.png">
        </div>

        <div class="right">
            <h2>Add the PlayEnemyDeathSound Function</h2>
            <ul>
                <li>Open the EnemyHealth script in the CompletedAssets folder of the Project Tab.</li>
                <li>It's located in _CompletedAssets->Scripts->Enemy->EnemyHealth. Double click to open.</li>
                <li>Below the Death() function add the PlayDeathSound() function - For me its about line 103</li>
            </ul>
        </div>

        <div class="left">
          <img src="Lecture9/AkSoundEngineCall.png">
        </div>

        <div class="right">
            <h2>Focus on the Wwise Engine calls</h2>
            <ul>
                <li>Make sure the parameter names match the name of your Switch Group and your Wwise event.</li>
            </ul>
        </div>

        <div class="left">
          <img src="Lecture9/DeathFunction1.png">
        </div>

        <div class="right">
            <h2>Call PlayEnemyDeathSound Function</h2>
            <ul>
                <li>Now we need to use our PlayEnemyDeathSound() function.</li>
                <li>Inside the Death() function of the Enemy Health script add the function call.</li>
                <li>I added mine right below the anim.SetTrigger("Dead") call.</li>
            </ul>
        </div>

        <div id="animationEvent" class="left">
          <img src="Lecture9/CreateScript.png">
        </div>

        <div class="right">
            <h2>Ui Text Animation Sounds</h2>
            <ul>
                <li>First set up your SFX and Sound Events in WWise.  Export your SoundBanks.</li>
            </ul>
        </div>

        <div class="left">
          <img src="Lecture9/AnimationEvent.png">
        </div>

        <div class="right">
            <h2>Ui Text Animation Sounds</h2>
            <ul>
                <li>Right-Click on the Scripts folder in the project tab.  Create a new C# script.  Name it AnimationPostEvent.</li>
                <li>You can delete the Start and Update functions that are created by default.  Then code the OnAnimationChooseEvent function. </li>
                <li>The final result should look like the image to the left.</li>
            </ul>
        </div>

        <div class="left">
        <img src="Lecture9/SelectUiText.png">
        </div>

        <div class="right">
            <h2>Ui Text Animation Sounds</h2>
            <ul>
              <li>Select WaveStartTextParent in the Hierarchy.</li>
            </ul>
        </div>

        <div class="left">
        <img src="Lecture9/AnimationAddComponent.png">
        </div>

        <div class="right">
            <h2>Ui Text Animation Sounds</h2>
            <ul>
              <li>Add our script AnimationPostEvent to the Gameobject.</li>
            </ul>
        </div>
        
        <div class="left">
        <img src="Lecture9/AddAnimationTab.png">
        </div>

        <div class="right">
            <h2>Ui Text Animation Sounds</h2>
            <ul>
              <li>Go to the Wwise Tab and Right-Click.  Add the Animation Tab.</li>
            </ul>
        </div>

        <div class="left">
          <img src="Lecture9/TimelineAnimEventAdd.png">
        </div>

        <div class="right">
            <h2>Ui Text Animation Sounds</h2>
            <ul>
              <li>Make sure WaveStartTextParent is selected in the Hierarchy.</li>
              <li>Left click on the light blue timeline bar to see the animation.  </li>
              <li></li>
            </ul>
        </div>

          
        <div class="left">
          <img src="Lecture9/TimelineAnimEventAdd.png">
        </div>

        <div class="right">
            <h2>Ui Text Animation Sounds</h2>
            <ul>
              <li>Make sure WaveStartTextParent is selected in the Hierarchy.</li>
              <li>Left click on the light blue timeline bar to see the animation.  </li>
              <li>Right-Click in the grey bar just below the light blue timeline to add an Animation Event</li>
            </ul>
        </div>

        <div class="left">
          <img src="Lecture9/SelectFunction.png">
        </div>

        <div class="right">
            <h2>Ui Text Animation Sounds</h2>
            <ul>
              <li>In the Inspector - Click on the function dropdown and choose OnAnimationChooseEvent</li>
            </ul>
        </div>

        <div class="left">
          <img src="Lecture9/StringEventName.png">
        </div>

        <div class="right">
            <h2>Ui Text Animation Sounds</h2>
            <ul>
              <li>Type the name of the Wwise event you want to play in the String text box.</li>
              <li>My Event is called WaveStart1</li>
            </ul>
        </div>
         
        </section>

    </div>
  </body>
</html>