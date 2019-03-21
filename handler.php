
<?php


$first = $_POST["firstName"];
$password = $_POST["password"];

//echo "<h4>" . $first . "</h4>";
//echo "<h4>" . $last . "</h4>";

$students = array("Amanda", "Bret", "Cameron", "Daisy", "Lucy", "Sophie", "Tom");
$key = array("PartyTime");

$validName = false;
$validKey = false;

validateLogin();

function validateLogin(){
    

    $keylength = count($GLOBALS["students"]);
    $numCorrect = 0;

    for($iter = 0; $iter < $keylength; $iter++)
    {
        if($GLOBALS["students"][$iter] == $GLOBALS["first"])
        {
            print "<h2> Valid Name"  . $GLOBALS["first"] .  "</h2>";
            $GLOBALS["validName"] = true;
        }
    }

    if($GLOBALS["key"][0] == $GLOBALS["password"])
    {
        print "<h2> Valid Password"  . $GLOBALS["password"] .  "</h2>";
        $GLOBALS["validKey"] = true;

    }

   if($GLOBALS["validKey"] && $GLOBALS["validName"])
    {
        outputResults();
    }
   else
    {
        print '<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
                <link rel="stylesheet" href="style.css">';
        print "<h2> Your Login Failed hit back and try again. </h2>";
    }   

    
 
}

function outputResults()
{
    //You have to change this before you upload
    header("Location: http://Reca398.party/Downloads.html");
    //header("Location: http://localhost/Reca398/Downloads.html");
    die();
   
}
