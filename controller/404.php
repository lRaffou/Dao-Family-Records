<?php
session_start();


include '../view/viewHeader.php';
include '../view/view404.php';
include '../view/viewFooter.php';

echo renderHeader();
echo render404();
echo renderFooter();
?>