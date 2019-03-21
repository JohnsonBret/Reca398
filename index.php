
<?php
// Tutorial on this from this URL
//https://youtu.be/UsCIdXGXnJc

session_start();

require_once 'classes/Membership.php';
$membership = new Membership();

if(isset($_GET['status'])  && $_GET['status'] == 'loggedout')
{
  //$membership->logUserOut();
}

if($_POST && !empty($_POST['username']) && !empty($_POST['password']))
{
  $response = $membership->validate_user($_POST['username'], $_POST['password']);
  if($response == true)
  {
    header("location: Downloads.php");
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
        <h3 class="welcome textCenter">Welcome Back</h3>
        <div class ="loginItem">
          <form class="form" action="" method="post">
            <fieldset>
              <legend>Login</legend>
              <div class="formRow">
                <label>First Name</label>
                <input class="formInput" type="text" name="username">
              </div>
              <div class="formRow">
                <label>Password</label>
                <input class="formInput" type="password" name="password">
              </div>
              <div class="formRowButtons">
                <input class="button" type="reset" value="Clear">
                <input class="button" type="submit" value="Login">
              </div>
          </fieldset>
          </form>
        </div>
        <a class="button" href="create.php">Create User</a>
      </section>
      

    </div>
  </body>
</html>