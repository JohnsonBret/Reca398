<?php
// Tutorial on this from this URL
//https://youtu.be/UsCIdXGXnJc

session_start();

// require_once 'classes/Membership.php';
require_once 'classes/Membership.php';
$membership = new Membership();

if(isset($_GET['status'])  && $_GET['status'] == 'loggedout')
{
  //$membership->logUserOut();
}

if($_POST && !empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['activation']))
{
  $response = $membership->create_user($_POST['username'], $_POST['password'], $_POST['activation']);
  if($response == true)
  {
    header("location: Downloads.php");
  }
  else
  {
    echo("IT didn't work!");
  }
}


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
  <div class="clipBg"></div>
  <div class="picBg"></div>
    <div class="containerIndex">
      <section class="left">

        <h1 class="leadItem textCenter">Reca 398</h1>
        <h2 class="subLeadItem textCenter">Sound Design for Video Games</h2>
      </section>
     
        
      <section class="right">
        <h3 class="welcome textCenter">Create A New User</h3>
        <div class ="loginItem">
          <form class="form" action="" method="post">
            <fieldset>
              <legend>User Creation</legend>
              <div class="formRow">
                <label>First Name</label>
                <input class="formInput" type="text" name="username">
              </div>
              <div class="formRow">
                <label>Password</label>
                <input class="formInput" type="password" name="password">
              </div>
              <div class="formRow">
                <label>Activation Code</label>
                <input class="formInput" type="text" name="activation">
              </div>
              <div class="formRowButtons">
                <input class="button" type="reset" value="Clear">
                <input class="button" type="submit" value="Create User">
              </div>
          </fieldset>
          </form>
        </div>
      </section>
      

    </div>
  </body>
</html>