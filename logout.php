<? session_start(); ?>
<? include('session.php');?>
<?php
session_destroy();
header("Location: homepagelogin.php");
?>
