<?php
session_start();

include '../view/viewHeader.php';
include '../view/viewArtiste.php';
include '../view/viewFooter.php';



echo renderHeader();
echo renderArtiste();
echo renderFooter();
?>