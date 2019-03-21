<?php

require_once 'constants.php';

class DbManager {

    private $conn;

    function __construct()
    {
        $this->conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME) or 
        die ('Problem connecting to database');;
    }

    function verifyUserCredentials($un, $pwd)
    {
        $query = "SELECT * 
        FROM members
        WHERE username = ?
        LIMIT 1";

        if($stmt = $this->conn->prepare($query))
        {
            $stmt->bind_param('s', $un);
            $results = $stmt->execute();

            $stmt->bind_result($id, $username, $password);

            $stmt->fetch();

            if(password_verify($pwd, $password))
            {
                $_SESSION["name"] = $username;

                $stmt->close();
                return true;
            }
            else
            {
                $stmt->close();
                return false;
            }
        
        }

        $stmt->close();
        return false;
    }

    function getUserGrades($un, $assign)
    {
        $query = "SELECT * 
        FROM members
        WHERE username = ?
        LIMIT 1";

        if($stmt = $this->conn->prepare($query))
        {
            $stmt->bind_param('s', $un);
            $results = $stmt->execute();

            $stmt->bind_result($id, $username, $password);

            if($stmt->fetch())
            {
                $stmt->close();
            }

            $query = "SELECT * 
            FROM grades
            WHERE student_id = ?
            AND assignment = ?
            LIMIT 1";

            if($stmt = $this->conn->prepare($query))
            {
                $stmt->bind_param('is', $id, $assign);
                $results = $stmt->execute();

                $stmt->bind_result($grades_id, $student_id, $grade, $assignment, $comments);

                if($stmt->fetch())
                {
                    $grade = array("grades_id"=>$grades_id, "student_id"=>$student_id, 
                    "grade"=>$grade, "assignment"=>$assignment, "comments"=>$comments);

                    $stmt->close();
                    return $grade;
                }
            }

        }

        $stmt->close();
        return false;
    }

    function insertNewGrade($studentId, $grade, $assignment, $comments)
    {
        $query = "INSERT INTO grades 
        (student_id, grade, assignment, comments)
        VALUES (?, ?, ?, ?)";

        if($stmt = $this->conn->prepare($query))
        {
            $stmt->bind_param('iiss', $studentId, $grade, $assignment, $comments);
            
            $result = $stmt->execute();

            if($result)
            {
                $stmt->close();
                echo("<p>Grade Inserted: " . (string)$grade . " </p>");
                return true;
            }
            else
            {
                echo("<p>Insert statment execute returned false</p>");
                return false;
            }

           
        }
    }

    function createNewUser($un, $pwd, $activation)
    {
        if($activation === "PartyTime")

        $query = "INSERT INTO members 
        (username, password)
        VALUES (?, ?)";

        if($stmt = $this->conn->prepare($query))
        {
            $stmt->bind_param('ss', $un, $pwd);
            
            $result = $stmt->execute();

            if($result)
            {
                $stmt->close();
                return true;
            }
            else
            {
                echo("<p>Insert statment execute returned false</p>");
                return false;
            }

           
        }
    }

    function updateUserPassword($un, $pwd, $newpwd)
    {
        $query = "UPDATE members
        SET password = ?
        WHERE username = ? AND password = ?
        LIMIT 1";

        if($stmt = $this->conn->prepare($query))
        {
            $stmt->bind_parm('sss', $newpwd, $un, $pwd);
            $stmt->execute();
        }

        if($stmt->fetch())
        {
            $stmt->close();
            return true;
        }
    }

}


?>