<?php
session_start();

require_once 'classes/Membership.php';
$membership = new Membership();
$membership->logUserOut();

header("Location:index.php");
?>