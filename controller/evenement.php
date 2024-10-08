<?php
session_start();

include '../view/viewHeader.php';
include '../view/viewEvenement.php';
include '../view/viewFooter.php';



echo renderHeader();
echo renderEvenement();
echo renderFooter();
?>