<?php
// Start the session
session_start();
?>

<html>
    <header>
        <link rel="stylesheet" href="quizStyle.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
    </header>

    <body>
        <section>


        <?php
            // Create connection
            $conn = new mysqli('localhost','bretxhnw_QuizMaster','ZKH_f4w0rvV&');
            
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 
            //echo "DB Connected successfully";
            
            // this will select the Database sample_db
            mysqli_select_db($conn,"bretxhnw_quizes");
            
            //echo "\n DB is seleted as quizes successfully";


            $sql = "SELECT id, customer_name, customer_age FROM customers";
            $result = $conn->query($sql);

            $date = date_create();
            //echo date_timestamp_get($date);
            
            // create INSERT query
            $sql="INSERT INTO quiz2submissions (UserName, 
                                                SubmitDate, 
                                                quiz2q1, 
                                                quiz2q2, 
                                                quiz2q3, 
                                                quiz2q4, 
                                                quiz2q5, 
                                                quiz2q6, 
                                                quiz2q7, 
                                                quiz2q8, 
                                                quiz2q9, 
                                                quiz2q10) 
                    VALUES ('$_POST[UserName]', 
                            '" . date_timestamp_get($date) . "', 
                            '$_POST[quiz2q1]',
                            '$_POST[quiz2q2]', 
                            '$_POST[quiz2q3]', 
                            '$_POST[quiz2q4]',
                            '$_POST[quiz2q5]', 
                            '$_POST[quiz2q6]', 
                            '$_POST[quiz2q7]',
                            '$_POST[quiz2q8]', 
                            '$_POST[quiz2q9]', 
                            '$_POST[quiz2q10]')";
            
            if ($conn->query($sql) === TRUE) {
                //echo "\nNew record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            //  Get answers Data from Database
            $servername = "localhost";
            $username = "bretxhnw_QuizMaster";
            $password = "ZKH_f4w0rvV&";
            $dbname = "bretxhnw_quizes";

            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmt = $conn->prepare("SELECT * FROM quiz2answers");
                $stmt->execute();

                // set the resulting array to associative
                $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                $rows= $stmt->fetchAll();
                $answers = $rows[0];
               
                //print_r($answers);
                
                $numCorrect = 0;
                //This loop shouldn't need to be run twice - refactor
                for ($x = 1; $x <= count($answers); $x++) {

                    if($answers["quiz2answer" . $x] === $_POST["quiz2q" . $x])
                    {
                        $numCorrect++;
                    }
                    
                } 

                echo "<h1 id=\"resultsTop\">" . $_POST['UserName'] . " You got " . $numCorrect . " out of " . count($answers) . " </h1>";

                echo "<div id=\"results\">";

                for ($x = 1; $x <= count($answers); $x++) {

                    if($answers["quiz2answer" . $x] === $_POST["quiz2q" . $x])
                    {
                        echo "<h3 class=\"result space\"> You got question number " . $x . " correct! </h3>";
                    }
                    else
                    {
                        echo "<h3 class=\"result\"> You got question number " . $x . " wrong! </h3>";
                    }

                    echo "<p class=\"showAnswer\">You answered " . $answers["quiz2answer" . $x] . " and the correct answer was " . $_POST["quiz2q" . $x] .  "</p>"; 

                    //echo "<br>" . $answers["quiz1answer" . $x];
                } 

                echo "</div>";
            }
            catch(PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
                        
            
            $conn = null;

        ?>

        </section>      
    </body>
</html>