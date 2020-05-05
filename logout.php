<?php
// in this file we will create a logout system
session_start();

session_unset();
// session unset hoty he header funciton execute ho ga or di gae location py move ho jay ga
header('location:admin_login.php');
?>