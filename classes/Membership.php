<?php
require 'classes/DbManager.php';

class Membership{
    
    function validate_user($un, $pwd)
    {
        $dbManager = new DbManager();
        $ensure_credentials = $dbManager->verifyUserCredentials($un, $pwd);

        if($ensure_credentials)
        {
            $_SESSION['status'] = 'authorized';
            return true;
        }
    }

    function update_password($un, $pwd, $newpwd)
    {
        $dbManager = new DbManager();
        $ensure_credentials = $dbManager->verifyUserCredentials($un, password_hash($pwd, PASSWORD_DEFAULT), password_hash($newpwd, PASSWORD_DEFAULT));

        if($ensure_credentials)
        {
            $_SESSION['status'] = 'authorized';
            return true;
        }
    }

    function insert_user_grade($studentId, $grade, $assignment, $comments)
    {
        $dbManager = new DbManager();
        $dbManager->insertNewGrade($studentId, $grade, $assignment, $comments);

    }

    function get_user_grades($un, $assign)
    {
        if($_SESSION['status'] == 'authorized')
        {
            
            $dbManager = new DbManager();
            $grades = $dbManager->getUserGrades($un, $assign);
            return $grades;
        }
        else
        {
            header("location: index.php");
        }

    }

    function create_user($un, $pwd, $activation)
    {
        $dbManager = new DbManager();
        $ensure_credentials = $dbManager->createNewUser($un, password_hash($pwd, PASSWORD_DEFAULT), $activation);
        // echo("This is the password Hash! " . password_hash($pwd, PASSWORD_DEFAULT));

        if($ensure_credentials)
        {
            $_SESSION['status'] = 'authorized';
            echo("<p>says it made a user</p>");
            return true;
        }

        echo("<p>Failed somewhere in create_user</p>");
        return false;
    }

    function logUserOut()
    {
        if(isset($_SESSION['status']))
        {
            unset($_SESSION['status']);

            if(isset($_COOKIE[session_name()]))
            {
                setcookie(session_name(), '', time - 10000);
                session_destroy();
            }
        }
    }

    function confirmMember()
    {
        if($_SESSION['status'] != 'authorized')
        {
            header("location: index.php");
        }
    }


}


?>