<?php
session_start();

include './utils/env.php';
include './utils/functions.php';
include './model/modelUsers.php';
include './view/viewHeader.php';
include './view/viewAcceuil.php';
include './view/viewFooter.php';


echo renderHeader();
echo renderAcceuil();
echo renderFooter();
