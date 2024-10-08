<?php
session_start();

include '../view/viewHeader.php';
include '../view/viewVideo.php';
include '../view/viewFooter.php';



echo renderHeader();
echo renderVideo();
echo renderFooter();
