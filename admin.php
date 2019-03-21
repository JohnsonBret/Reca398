<?php
session_start();

require_once 'classes/Membership.php';
$membership = new Membership();

if($_POST && !empty($_POST['student_id']) && !empty($_POST['assignment'])  && !empty($_POST['grade'])  && !empty($_POST['comments']))
{
  $response = $membership->insert_user_grade($_POST['student_id'], $_POST['grade'], $_POST['assignment'], $_POST['comments']);
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
    <title>Admin</title>
  </head>
  
  <body>
    <nav>
        <a href="Downloads.php">Downloads</a>
        <a class="marginR" href="Games.php">Games</a>
        <a href="Grades.php">Grades</a>
        <?php
        if($_SESSION["name"])
        {
            echo("<a> " . $_SESSION["name"] . " </a>");
        }
        ?>
        <a href="logout.php">Logout</a>
    </nav>
    <div class="containerIndex">
    
      <section>
        <h3 class="welcome textCenter">Good Luck B</h3>
        <div class ="loginItem">
          <form class="form" action="" method="post">
            <fieldset>
              <legend>Enter Grade</legend>
              <div class="formRow">
                <label>Student</label>
                <select name="student_id">
                    <option value="4">Mikayla</option>
                    <option value="5">Jessica</option>
                    <option value="6">joey</option>
                    <option value="7">greg</option>
                    <option value="8">Joe</option>
                    <option value="9">Ben</option>
                    <option value="10">Drew</option>
                    <option value="12">Ayla</option>
                    <option value="1">Bret</option>
                </select> 
              </div>
              <div class="formRow">
                <label>Assignment</label>
                <select name="assignment">
                    <option value="csharp" selected="selected">csharp</option>
                    <option value="bootcamp">bootcamp</option>
                    <option value="survival">survival</option>
                    <option value="final">final</option>
                </select> 
              </div>
              <div class="formRow">
                <label>Grade</label>
                <input class="formInput" type="number" name="grade">
              </div>
              <div class="formRow">
                <label>Comments</label>
                <textarea name="comments" id="" cols="64" rows="10"></textarea>
              </div>
              <div class="formRowButtons">
                <input class="button" type="reset" value="Clear">
                <input class="button" type="submit" value="Enter Grade">
              </div>
          </fieldset>
          </form>
        </div>
        <a class="button" href="create.php">Create User</a>
      </section>
      

    </div>
  </body>
</html>